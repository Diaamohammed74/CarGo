<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\UpdateCustomerRequest;
use App\Http\Resources\Dashboard\Customer\CustomerResource;

class CustomerController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $customers = User::useFilters()
            ->customer()
            ->latest()
            ->with([
                'customerUser' => [
                    'cars',
                ],
            ])->get();
        return view('dashboard.customer.index', ['customers' => $customers]);
    }

    // public function store(CreateCustomerRequest $request): JsonResponse
    // {
    //     $customer = Customer::create($request->validated());

    //     return $this->apiResponseStored('Customer created successfully', new CustomerResource($customer));
    // }

    // public function show(Customer $customer): JsonResponse
    // {
    //     return $this->responseSuccess(null, new CustomerResource($customer));
    // }

    public function update(UpdateCustomerRequest $request,$customer)
    {
        User::where('id', $customer)->update($request->validated());
        return to_route('dashboard.customers.index');
    }

    public function destroy(User $customer)
    {
        $customer->delete();
        $this->DeletedToaster();
        return back();
    }
}
