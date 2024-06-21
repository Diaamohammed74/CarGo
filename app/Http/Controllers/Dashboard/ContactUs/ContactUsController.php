<?php

namespace App\Http\Controllers\Dashboard\ContactUs;

use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Services\WaSenderService;
use App\Http\Requests\front\ContactUsReplyRequest;
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
        $messages=ContactUs::latest()->with('admin.user')->get();
        return view('dashboard.contacts.index',compact('messages'));
    }
    public function edit(ContactUs $contact_u)
    {
        if ($contact_u->whatssapp_reply) {
            $this->dashboardToaster('It already has reply', 'info');
            return redirect()->route('dashboard.contact-us.index');
        }
        return view('dashboard.contacts.edit', compact('contact_u'));
    }

    public function update(ContactUsReplyRequest $request, ContactUs $contact_u)
    {
        $contact_u->update($request->validated());
        $contact_u->refresh();
        $this->waSenderService->sendMessage($contact_u->phone, $contact_u->whatssapp_reply);
        $this->dashboardToaster('Replied Successfuly', 'info');
        return to_route('dashboard.contact-us.index');
    }
    public function destroy(ContactUs $contact_u)
    {
        $contact_u->delete();
        $this->DeletedToaster();
        return back();
    }
}
