<?php

namespace App\Http\Controllers\Front;
use App\Models\Service;
use App\Models\CustomerCar;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $categories = ServiceCategory::get();
        $services   = Service::useFilters()->get();
        return view('front.pages.service.services', compact(['categories', 'services']));
    }
    public function create()
    {
        $customerCars = CustomerCar::where('customer_id', auth()->id())->latest()->get();
        $services     = Service::get();
        return view('front.pages.order.create-order', compact(['customerCars', 'services']));
    }

}
