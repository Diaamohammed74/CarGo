<?php

namespace App\Http\Controllers\Front\Order;

use App\Models\AtRepairCenterOrder;
use App\Models\Order;
use App\Models\Service;
use App\Models\CustomerCar;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\CreateOrderRequest;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Models\OnRoadOrder;
use App\Models\OrderMechanical;

class OrderController extends Controller
{
    public function __construct()
    {
    }
    public function create()
    {
        $customerCars = CustomerCar::where('customer_id', auth()->id())->latest()->get();
        $services     = Service::get();
        return view('front.pages.order.create-order', compact(['customerCars', 'services']));
    }

    public function store(CreateOrderRequest $request)
    {
        $data                    = $request->validated();
        $data['total_amount']    = $this->calculateTotalAmount($data['services']);
        $data['mechanicals_ids'] = $this->getAssociatedMechanicalIds($data['services']);
        $order                   = Order::create($data);
        if ($order->order_type == 1) {
            OnRoadOrder::create([
                'order_id'  => $order->id,
                'longitude' => $data['longitude'],
                'latitude'  => $data['latitude']
            ]);
        }
        if ($order->order_type == 2) {
            AtRepairCenterOrder::create([
                'order_id'     => $order->id,
                'booking_time' => $data['booking_time'],
                'notes'        => $data['notes']
            ]);
        }
        $order->orderServices()->sync($data['services']);
        if ($data['mechanicals_ids']) {
            foreach ($data['mechanicals_ids'] as $mechId) {
                OrderMechanical::create(['order_id' => $order->id, 'mechanical_id' => $mechId]);
            }
        }
        toast('Order created successfuly', 'success');
        return back();
    }
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->validated());
    }
    public function getServices($servicesIds)
    {
        return Service::whereIn('id', $servicesIds)->get();
    }
    public function calculateTotalAmount(array $serviceIds): float
    {
        $totalAmount = 0;
        $services    = $this->getServices($serviceIds);
        foreach ($services as $service) {
            $totalAmount += $service->price;
        }
        return $totalAmount;
    }
    public function getAssociatedMechanicalIds(array $serviceIds)
    {
        return Service::whereIn('id', $serviceIds)
            ->with('mechanicals.mechanicalUser')
            ->get()
            ->pluck('mechanicals')
            ->flatten()
            ->pluck('id')
            ->unique()
            ->toArray();
    }
    public function destroy(Order $order)
    {
        $order->delete();
        toast('Order deleted successfuly', 'success');
        return to_route('user.orders');
    }
}
