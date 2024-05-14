<?php

namespace App\Http\Requests\front\Auth;

use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'first_name'  => ['required', 'string'],
            'last_name'   => ['required', 'string'],
            'email'       => ['required', 'email', 'unique:users,email'],
            'phone'       => ['required', 'string', 'unique:users,phone'],
            'national_id' => ['required', 'numeric', 'unique:customers,national_id'],
            'gender'      => ['required', 'string', Rule::in(['male', 'female'])],
            'password'    => ['required', 'string','confirmed'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();
        if ($key === null) {
            $validatedData['type']   = UsersTypes::CUSTOMER->value;
            $validatedData['status'] = StatusEnum::Active->value;
            return $validatedData;
        }
        return $validatedData[$key] ?? $default;
    }
}
