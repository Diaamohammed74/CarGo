<?php

namespace App\Http\Controllers\Dashboard\OrderFeedBack;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Dashboard\OrderFeedBack\OrderFeedBackResource;
use App\Models\OrderFeedBack;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderFeedBackController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $orderFeedBacks = OrderFeedBack::dynamicPaginate();

        return OrderFeedBackResource::collection($orderFeedBacks);
    }

    public function store(Request $request): JsonResponse
    {
        $orderFeedBack = OrderFeedBack::create($request->validated());

        return $this->responseCreated('OrderFeedBack created successfully', new OrderFeedBackResource($orderFeedBack));
    }

    public function show(OrderFeedBack $orderFeedBack): JsonResponse
    {
        return $this->responseSuccess(null, new OrderFeedBackResource($orderFeedBack));
    }

    public function update(Request $request, OrderFeedBack $orderFeedBack): JsonResponse
    {
        $orderFeedBack->update($request->validated());

        return $this->responseSuccess('OrderFeedBack updated Successfully', new OrderFeedBackResource($orderFeedBack));
    }

    public function destroy(OrderFeedBack $orderFeedBack): JsonResponse
    {
        $orderFeedBack->delete();

        return $this->responseDeleted();
    }

   
}
