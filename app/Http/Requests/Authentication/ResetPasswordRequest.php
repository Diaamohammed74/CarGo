<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Validation\Rules\Password;
use App\Http\Requests\FormRequest;

class ResetPasswordRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'token'    => ['required'],
            'email'    => ['required', 'email', 'exists:users,email'],
            'password' => ['bail', 'required', Password::min(8), 'confirmed'],
        ];
    }
    public function attributes()
    {
        return [
            // 'token'    => __('validation.attributes.token'),
            'email'    => __('validation.attributes.email'),
            'password' => __('validation.attributes.password'),
        ];
    }
}
