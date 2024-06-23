<?php

namespace App\Http\Controllers\Front;

use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Services\WaSenderService;
use App\Http\Requests\front\ContactUsStoreRequest;

class ContactUsController extends Controller
{
    protected $waSenderService;
    public function __construct(WaSenderService $waSenderService)
    {
        $this->waSenderService = $waSenderService;
    }
    public function index()
    {
        return view('front.pages.contact-us.contact-us');
    }
    public function store(ContactUsStoreRequest $request)
    {
        $data = ContactUs::create($request->validated());
        alert()->success('Thank You!', 'We\'ve received your message and will get back to you shortly. Thank you!');
        $whatsAppMsg = "Hello! $data->name ,
        Thank you for reaching out to CarGo!
        We will get back to you as soon as possible.
        Thank you for your patience!
        Best regards,CarGo.";
        $this->waSenderService->sendMessage($data->phone, $whatsAppMsg);
        return back();
    }
}
