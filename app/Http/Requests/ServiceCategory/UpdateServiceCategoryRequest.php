<?php

namespace App\Http\Requests\ServiceCategory;

use App\Http\Requests\FormRequest;

class UpdateServiceCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:service_categories,title,' . $this->service_category->id . ',id', 'max:30']
        ];
    }
}
