<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;


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
            'phone'   => ['required', 'string', 'digits:11', 'regex:/^01[0125][0-9]{8}$/'],
            'subject' => ['required', 'string', 'max:190'],
            'message' => ['required', 'string', 'max:500'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();
        
        // Modify phone number by adding prefix if necessary
        if (isset($validatedData['phone'])) {
            $validatedData['phone'] = $this->addPhonePrefix($validatedData['phone']);
        }
        
        return $validatedData;
    }

    private function addPhonePrefix($phoneNumber)
    {
        // Check if phone number starts with '+'
        if (!Str::startsWith($phoneNumber, '+2')) {
            // If not, add '+' prefix
            return '+2' . $phoneNumber;
        }
        
        // Phone number already has '+' prefix, return as is
        return $phoneNumber;
    }
}
