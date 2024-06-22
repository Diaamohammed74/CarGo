<?php

namespace App\Http\Requests\front\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name'  => ['required', 'string'],
            'email'      => ['required', 'email', 'unique:users,email,'.auth()->id().',id'],
            'password'   => ['nullable', 'string', 'confirmed'],
            'phone'      => ['required', 'string', 'unique:users,phone,'.auth()->id().',id', 'digits:11', 'regex:/^01[0125][0-9]{8}$/'],
            'image'      => ['nullable', 'image', 'max:2048'],
        ];
    }
    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    //    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    //    {
    //        toast($validator->errors()->first(), 'error');
    //        return back();
    //    }
}
