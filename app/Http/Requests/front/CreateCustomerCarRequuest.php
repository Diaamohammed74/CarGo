<?php

namespace App\Http\Requests\front;

use App\Http\Requests\FormRequest;


class CreateCustomerCarRequuest extends FormRequest
{
    public function rules(): array
    {
        return [
            'model'        => ['required', 'string', 'min:3', 'max:255'],
            'type'         => ['required', 'string', 'min:3', 'max:255'],
            'color'        => ['required', 'string', 'min:3', 'max:255'],
            'plate_number' => ['required', 'string', 'min:3', 'max:255', 'unique:customer_cars,plate_number'],
        ];
    }
    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator){
        toast("Validation error!", 'error');
        return back();
    }
}
