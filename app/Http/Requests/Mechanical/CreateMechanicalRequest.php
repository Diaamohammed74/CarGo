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
        'phone'                    => ['required', 'string', 'unique:users,phone','digits:11','regex:/^01[0125][0-9]{8}$/'],
        'password'                 => ['required', 'string', 'min:8'],
        'birth_date'               => ['required', 'date', 'date_format:Y-m-d','before:today'],
        'join_date'                => ['required', 'date', 'date_format:Y-m-d','after:birth_date'],
        'image'                    => ['nullable', 'image',],
        'status'                   => ['required', 'integer', Rule::in(StatusEnum::getValues())],
        'gender'                   => ['required', 'string', Rule::in(['male', 'female'])],
        'job_type'                 => ['required', 'integer', Rule::in(MechanicalJobType::getValues())],
        'specialization_id'        => ['required', 'integer',],
        'monthly_salary'           => ['required_if:job_type,'.MechanicalJobType::FullTime->value,],
        'city_id'                  => ['required_if:job_type,'.MechanicalJobType::ByOrder->value, 'integer',],
        ];
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
