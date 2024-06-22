<?php

namespace App\Http\Requests\Order;

use App\Enums\OrderTypeEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'services_ids'         => [
                'required',
                'array',
                'min:1',
            ],
            'services_ids.*'       => [
                'required',
                'exists:services,id',
            ],
            'customer_car_id'      => [
                'required',
                'exists:customer_cars,id',
            ],
            'order_type'           => [
                'required',
                Rule::in(OrderTypeEnum::getValues()),
            ],
            'latitude'  => ['required_if:order_type,1', 'numeric'],
            'longitude' => ['required_if:order_type,1', 'numeric'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $data                 = Parent::validated();
        $data['customer_id']  = auth()->id();
        $services             = $this->input('services');
        $data['services_ids'] = explode(',', $services);
        return $data;
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errorMessage = $validator->errors()->all();
        toast($errorMessage, 'error');
        return back();
    }

    public function attributeNames(): array
    {
        return [
            'services_ids'    => 'services',
            'customer_car_id' => 'customer car',
            'order_type'      => 'order type',
            'latitude'        => 'latitude',
            'longitude'       => 'longitude',
        ];
    }
}
