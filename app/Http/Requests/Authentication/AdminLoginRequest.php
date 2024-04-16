<?php

namespace App\Http\Requests\Authentication;

use App\Http\Requests\FormRequest;

class AdminLoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'    => ['required', 'email',],
            'password' => ['required', 'min:8'],
        ];
    }
    public function attributes()
    {
        return [
            'email'    => __('validation.attributes.email'),
            'password' => __('validation.attributes.password'),
        ];
    }
}
