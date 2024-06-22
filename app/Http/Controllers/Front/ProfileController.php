<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\CustomerCar;
use App\Http\Controllers\Controller;
use App\Http\Requests\front\Auth\UpdateProfileRequest;
use App\Http\Requests\front\CreateCustomerCarRequuest;
use App\Http\Traits\Api\MediaHandler;

class ProfileController extends Controller
{
    use MediaHandler;
    public function index()
    {
        $customer = User::where('id', auth()->id())->customer()->with(['customerUser'])->first();
        return view('front.pages.profile.profile', compact(['customer']));
    }
    public function updateProfile(UpdateProfileRequest $request)
    {
        $updatedData = $request->validated();
        if (isset($updatedData['image'])) {
            $updatedData['image'] = $this->upload($updatedData['image'], 'uploads/images');
        }
        auth()->user()->update($updatedData);
        toast('Profile updated successfully', 'success');
        return back();
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
