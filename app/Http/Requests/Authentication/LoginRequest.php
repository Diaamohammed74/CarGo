<?php

namespace App\Http\Requests\Authentication;

use App\Http\Requests\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'phone'    => ['required', 'numeric',],
            'password' => ['required', 'min:8'],
        ];
    }
    public function attributes()
    {
        return [
            'phone'    => __('validation.attributes.phone'),
            'password' => __('validation.attributes.password'),
        ];
    }
}
