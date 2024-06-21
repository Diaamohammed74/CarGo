<?php

namespace App\Http\Controllers\Front;

use App\Models\CustomerCar;
use App\Http\Controllers\Controller;
use App\Http\Requests\front\CreateCustomerCarRequuest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('front.pages.profile.profile');
    }
    public function storeCar(CreateCustomerCarRequuest $request)
    {
        $validatedData                = $request->validated();
        $validatedData['customer_id'] = auth()->id();
        CustomerCar::create($validatedData);
        toast('Your car added successfuly', 'success');
        return back();
    }
}
