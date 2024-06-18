<?php

namespace App\Http\Requests\Customer;

use App\Http\Requests\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => ['required', 'integer'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();
        $validatedData['status'] = $validatedData['status'] == 0 ? 2 : $validatedData['status'];
        return $validatedData;
    }
}
