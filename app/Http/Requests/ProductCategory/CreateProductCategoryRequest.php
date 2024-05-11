<?php

namespace App\Http\Requests\ProductCategory;

use App\Http\Requests\FormRequest;

class CreateProductCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:product_categories,title', 'max:30']
        ];
    }
}
