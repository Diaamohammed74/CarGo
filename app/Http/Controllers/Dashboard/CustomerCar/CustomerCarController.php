<?php

namespace App\Http\Controllers\Dashboard\CustomerCar;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCar\UpdateCustomerCarRequest;
use App\Http\Requests\CustomerCar\CreateCustomerCarRequest;
use App\Http\Resources\Dashboard\CustomerCar\CustomerCarResource;
use App\Models\CustomerCar;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CustomerCarController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $customerCars = CustomerCar::useFilters()->dynamicPaginate();

        return CustomerCarResource::collection($customerCars);
    }

    public function store(CreateCustomerCarRequest $request): JsonResponse
    {
        $customerCar = CustomerCar::create($request->validated());

        return $this->apiResponseStored('CustomerCar created successfully', new CustomerCarResource($customerCar));
    }

    public function show(CustomerCar $customerCar): JsonResponse
    {
        return $this->responseSuccess(null, new CustomerCarResource($customerCar));
    }

    public function update(UpdateCustomerCarRequest $request, CustomerCar $customerCar): JsonResponse
    {
        $customerCar->update($request->validated());

        return $this->responseSuccess('CustomerCar updated Successfully', new CustomerCarResource($customerCar));
    }

    public function destroy(CustomerCar $customerCar): JsonResponse
    {
        $customerCar->delete();

        return $this->apiResponseDeleted();
    }

   
}
