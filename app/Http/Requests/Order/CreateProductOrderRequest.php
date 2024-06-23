<?php

namespace App\Http\Requests\Order;

use App\Enums\OrderTypeEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductOrderRequest  extends FormRequest
{
    public function rules(): array
    {
        return [
            'product_id' => ['required', 'min:1',]
        ];
    }

    public function attributeNames(): array
    {
        return [
            'product_id' => 'product',
        ];
    }
}
