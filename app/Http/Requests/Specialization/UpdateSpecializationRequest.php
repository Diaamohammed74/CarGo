<?php

namespace App\Http\Requests\Specialization;

use App\Http\Requests\FormRequest;

class UpdateSpecializationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:specializations,title,'.$this->specialization->id.',id'],
        ];
    }
}
