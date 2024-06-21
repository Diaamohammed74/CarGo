<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;


class ContactUsReplyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'whatssapp_reply' => ['required', 'string', 'max:500'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validatedData            = parent::validated();
        $validatedData['admin_id'] = auth()->id();
        return $validatedData;
    }
}
