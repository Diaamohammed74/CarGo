<?php

namespace App\Http\Requests\ServiceCategory;

use App\Http\Requests\FormRequest;

class CreateServiceCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:service_categories,title', 'max:30']
        ];
    }
}
