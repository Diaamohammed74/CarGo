<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\ContactUsStoreRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('front.pages.contact-us.contact-us');
    }
    public function store(ContactUsStoreRequest $request)
    {
        ContactUs::create($request->validated());
        toastr()->success('Message sent successfully');
        return back();
    }
}
