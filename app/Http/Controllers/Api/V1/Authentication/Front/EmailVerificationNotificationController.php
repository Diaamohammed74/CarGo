<?php 
namespace App\Http\Controllers\Api\V1\Authentication\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmailVerificationNotificationController extends Controller{
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $this->apiResponse([], __('main.mail_verified'), 200);
        }
        $user = Auth::user();
        $user->sendCustomEmailVerificationNotification();
        return $this->apiResponse([], __('main.verification_sent'), 200);
    }
    
}