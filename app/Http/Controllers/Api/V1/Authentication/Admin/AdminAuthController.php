<?php

namespace App\Http\Controllers\Api\V1\Authentication\Admin;

use App\Models\User;
use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use App\Http\Traits\Api\ApiResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Authentication\AdminLoginRequest;


class AdminAuthController
{
    use ApiResponse;

    public function login(AdminLoginRequest $request)
    {
        $credentials = $request->validated();
        $user        = User::where('type', UsersTypes::ADMIN->value)
            ->where('email', $credentials['email'])
            ->first();
        if (
            $user && $user->status['value'] == StatusEnum::Active->value &&
            Auth::attempt([
                'email' => $credentials['email'],
                'password'  => $credentials['password']
            ])
        ) {
            $data = $this->getUserData(Auth::user());
            return $this->apiResponse($data, __("main.loggedin"), 200);
        }
        return $this->apiResponse([], __("main.credentials_failed"), 401);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return $this->apiResponse([], __("main.loggedout"), 200);
    }
    protected function getUserData($user)
    {
        return [
            'token'       => $user->createToken("admin_token")->plainTextToken,
            'username'    => $user->full_name,
            'img'         => $user->image,
            'is_verified' => $user->is_email_verified,
        ];
    }

    // public function forgotPassword(ForgotPasswordRequest $request)
    // {
    //     $status = Password::sendResetLink(['email' => $request->validated()['email']]);
    //     if ($status === Password::RESET_LINK_SENT) {
    //         return $this->apiResponse([], $status, 200);
    //     }
    //     throw ValidationException::withMessages(['email' => [trans($status)]]);
    // }

    // public function reset(ResetPasswordRequest $request)
    // {
    //     $data   = $request->validated();
    //     $user   = User::where('email', $data['email'])->first();
    //     $status = $user->update([
    //         'password'       => Hash::make($data['password']),
    //         'remember_token' => Str::random(60),
    //     ]);
    //     $user->tokens()->delete();
    //     event(new PasswordReset($user));
    //     $responseMessage = ($status == true)
    //         ? __('main.password_reset_success')
    //         :      __('main.password_reset_failed');
    //     return $this->apiResponse([], $responseMessage, ($status == true ? 200 : 500));
    // }
}
