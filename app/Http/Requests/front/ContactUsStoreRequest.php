<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name'    => ['required', 'string'],
            'email'   => ['required', 'email',],
            'subject' => ['required', 'string','max:190'],
            'message' => ['required', 'string','max:500'],
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->fails()) {
                alert()->warning('Failed!');
            }
        });
    }
}
