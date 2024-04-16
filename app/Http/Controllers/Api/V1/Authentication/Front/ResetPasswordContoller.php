<?php 
namespace App\Http\Controllers\Api\V1\Authentication\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\ForgotPasswordRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class ResetPasswordContoller extends Controller{
    public function store(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink(['email' => $request->validated()['email']]);
        if ($status === Password::RESET_LINK_SENT) {
            return $this->apiResponse([], $status, 200);
        }
        throw ValidationException::withMessages(['email' => [trans($status)]]);
    }
}