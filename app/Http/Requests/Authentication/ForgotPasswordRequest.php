<?php

namespace App\Http\Requests\Authentication;
use App\Http\Requests\FormRequest;

class ForgotPasswordRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'exists:users,email'],
        ];
    }
    public function attributes()
    {
        return [
            'email' => __('validation.attributes.email'),
        ];
    }
}
