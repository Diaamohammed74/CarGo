<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Http\Requests\Order\CreateOrderRequest;
use App\Http\Resources\Dashboard\Order\OrderResource;
use App\Models\Order;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $orders = Order::useFilters()->latest()->where('order_type',1)->with(['customer','onRoad','customerCar','orderMechanicals','orderServices','orderProducts'])->get();
        return view('dashboard.orders.OnRoadIndex',compact('orders'));
    }

    public function store(CreateOrderRequest $request): JsonResponse
    {
        $order = Order::create($request->validated());

        return $this->responseCreated('Order created successfully', new OrderResource($order));
    }

    public function show(Order $order): JsonResponse
    {
        return $this->responseSuccess(null, new OrderResource($order));
    }

    public function update(UpdateOrderRequest $request, Order $order): JsonResponse
    {
        $order->update($request->validated());

        return $this->responseSuccess('Order updated Successfully', new OrderResource($order));
    }

    public function destroy(Order $order): JsonResponse
    {
        $order->delete();

        return $this->responseDeleted();
    }
}