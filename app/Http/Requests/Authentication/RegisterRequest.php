<?php

namespace App\Http\Requests\Authentication;

use App\Enums\UserGender;
use App\Enums\UserReligion;

use App\Rules\ArabicFullNameRule;
use Illuminate\Validation\Rule;
use App\Http\Requests\FormRequest;
use App\Rules\FullNameRule;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name'               => ['required', 'bail', 'string', 'min:2', 'max:50', new ArabicFullNameRule(), new FullNameRule()],
            'email'              => ['nullable', 'email','unique:users,email'],
            'phone'              => ['required', 'unique:users,phone'],
            'parent_phone'       => ['required', 'numeric', 'different:phone'],
            'parent_national_id' => ['required', 'numeric', 'min:14'],
            'birthdate'          => ['required', 'bail', 'date', 'date_format:Y-m-d', 'before:today'],
            'religion'           => ['required', 'integer', Rule::in(UserReligion::getValues())],
            'gender'             => ['required', 'integer', Rule::in(UserGender::getValues())],
            'address'            => ['required', 'string', 'max:200'],
            'category_id'        => ['required', 'string', 'exists:categories,slug'],
            'governrate_id'      => ['required', 'string', 'exists:governrates,slug'],
            'center_id'          => ['sometimes','nullable', 'string', 'exists:course_centers,slug'],
            'password'           => ['required','bail','confirmed',Password::min(8),],
        ];
    }
    
    public function attributes()
    {
        return [
            'name'               => __('validation.attributes.name'),
            'email'              => __('validation.attributes.email'),
            'std_phone'          => __('validation.attributes.phone'),
            'parent_phone'       => __('validation.attributes.phone'),
            'categoriy_id'       => __('main.attributes.educ_level'),
            'governrate_id'      => __('main.attributes.governrate'),
            'gender'             => __('validation.attributes.gender'),
            'religion'           => __('validation.attributes.religion'),
            'address'            => __('validation.attributes.address'),
            'password'           => __('validation.attributes.password'),
            'parent_national_id' => __('main.attributes.parent_national_id'),
        ];
    }
}
