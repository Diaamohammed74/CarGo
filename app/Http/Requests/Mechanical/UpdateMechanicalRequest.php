<?php

namespace App\Http\Requests\Mechanical;

use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use Illuminate\Validation\Rule;
use App\Http\Requests\FormRequest;

class UpdateMechanicalRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name'          => ['required', 'string'],
            'last_name'           => ['required', 'string'],
            'email'               => ['required', 'email', 'unique:users,email,'.$this->mechanical.',id'],
            'phone'               => ['required', 'string','unique:users,phone,'.$this->mechanical.',id'],
            'image'               => ['nullable', 'image', 'max:2048'],
            'status'              => ['required', 'integer', Rule::in(StatusEnum::getValues())],
            'gender'              => ['required', 'string', Rule::in(['male', 'female'])],
            'password'            => ['required', 'string', 'min:8'],
            'join_date'           => ['required', 'date', 'date_format:Y-m-d'],
            'birth_date'          => ['required', 'date', 'date_format:Y-m-d'],
            'job_type'            => ['required', 'integer', Rule::in([1, 2])],
            'specialization_id'   => ['required', 'array'],
            'specialization_id.*' => ['required', 'integer', 'exists:specializations,id'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();
    
        if ($key === null) {
            // Merge the validated data with the mechanical user type
            $validatedData['type'] = UsersTypes::MECHANICAL->value;
            return $validatedData;
        }
    
        return $validatedData[$key] ?? $default;
    }
    
}
