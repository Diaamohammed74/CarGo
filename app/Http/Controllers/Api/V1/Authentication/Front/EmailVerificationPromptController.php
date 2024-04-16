<?php 
namespace App\Http\Controllers\Api\V1\Authentication\Front;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use App\Http\Requests\Authentication\CustomVerifyEmailRequest;

class EmailVerificationPromptController extends Controller{
    public function verification(CustomVerifyEmailRequest $request)
    {
        $user = User::where('email', $request->validated()['email'])->first();
        if ($user->hasVerifiedEmail()) {
            return $this->apiResponse([], __('main.mail_verified'), 200);
        }
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        return $this->apiResponse([], __('main.verification_success'), 200);
    }
}