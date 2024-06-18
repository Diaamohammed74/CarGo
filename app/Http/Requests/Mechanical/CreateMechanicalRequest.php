<?php

namespace App\Http\Requests\Mechanical;

use App\Enums\MechanicalJobType;
use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use Illuminate\Validation\Rule;
use App\Http\Requests\FormRequest;

class CreateMechanicalRequest extends FormRequest
{
    public function rules(): array
    {
        return [
        'first_name'               => ['required', 'string'],
        'last_name'                => ['required', 'string'],
        'email'                    => ['required', 'email', 'unique:users,email'],
        'phone'                    => ['required', 'string', 'unique:users,phone'],
        'password'                 => ['required', 'string', 'min:8'],
        'join_date'                => ['required', 'date', 'date_format:Y-m-d'],
        'birth_date'               => ['required', 'date', 'date_format:Y-m-d','before:today'],
        'image'                    => ['nullable', 'image', 'max:2048'],
        'status'                   => ['required', 'integer', Rule::in(StatusEnum::getValues())],
        'gender'                   => ['required', 'string', Rule::in(['male', 'female'])],
        'job_type'                 => ['required', 'integer', Rule::in(MechanicalJobType::getValues())],
        'specialization_id'        => ['required', 'integer', 'exists:specializations,id'],
        'monthly_salary'           => ['required_if:job_type,'.MechanicalJobType::FullTime->value, 'numeric'],
        'city_id'                  => ['required_if:job_type,'.MechanicalJobType::ByOrder->value, 'integer','exists:cities,id'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
            dd(  $validator->errors());
            }
        });
    }
    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();

        if ($key === null) {
            $validatedData['type'] = UsersTypes::MECHANICAL->value;
            return $validatedData;
        }
        return $validatedData[$key] ?? $default;
    }
}
