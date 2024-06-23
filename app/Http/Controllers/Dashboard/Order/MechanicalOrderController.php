<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Models\Order;
use App\Models\Product;
use App\Enums\OrderTypeEnum;
use App\Models\OrderProduct;
use App\Models\OrderMechanical;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Http\Traits\blade\BladeToasterMessages;
use App\Http\Resources\Dashboard\Order\OrderResource;
use App\Http\Requests\Order\CreateProductOrderRequest;

class MechanicalOrderController extends Controller
{
    use BladeToasterMessages;
    public function __construct()
    {
    }

    public function index()
    {
        $mechanicalId = auth()->id();
        $orderIds = OrderMechanical::where('mechanical_id', $mechanicalId)
            ->pluck('order_id');

        $orders = Order::useFilters()
            ->latest()
            ->whereIn('id', $orderIds)
            ->where('order_type',1)
            ->with(['customer', 'onRoad', 'customerCar', 'orderMechanicals', 'orderServices', 'orderProducts'])
            ->get();
        $products = Product::get();

        return view('dashboard.orders.mechanical.OnRoadIndex', compact('orders', 'products'));
    }

    public function addProduct(CreateProductOrderRequest $request, Order $order)
    {
        $validatedData = $request->validated();
        $productId = $validatedData['product_id'];
        $product = Product::where('id', $productId)
            ->where('quantity', '>=', 1)
            ->firstOrFail();
        // Check if the product already exists in the order
        $orderProduct = OrderProduct::where('order_id',$order->id)->where('product_id', $productId)->first();
    
        if ($orderProduct) {
            // If it exists, increment the quantity
            $orderProduct->increment('quantity');
        } else {
            // If it doesn't exist, create a new order-product entry
            OrderProduct::where('order_id',$order->id)->create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => 1, 
            ]);
        }
    
        // Increment the total amount of the order by the price of the product
        $order->increment('total_amount', $product->price);
    
        // Decrement the quantity of the product
        $product->decrement('quantity');
    
        $this->UpdatedToaster();
        return back();
    }
    

    public function update(UpdateOrderRequest $request,Order $order)
    {
        $data=$request->validated();
        $order->update([
            'order_status'=>$data['order_status']
        ]);
        $this->UpdatedToaster();
        return back();
    }
    public function show(Order $order): JsonResponse
    {
        return $this->responseSuccess(null, new OrderResource($order));
    }


    public function destroy(Order $order): JsonResponse
    {
        $order->delete();

        return $this->responseDeleted();
    }
}
