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
        alert()->success('Thank You!', 'We\'ve received your message and will get back to you shortly. Thank you!');
        return back();
    }
}
