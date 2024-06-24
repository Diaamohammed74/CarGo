<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductOrderRequest  extends FormRequest
{
    public function rules(): array
    {
        return [
            'product_id' => ['required', 'min:1',],
            'quantity'   => ['required', 'min:1',],
        ];
    }

    public function attributeNames(): array
    {
        return [
            'product_id' => 'product',
            'quantity'   => 'quantity',
        ];
    }
}
