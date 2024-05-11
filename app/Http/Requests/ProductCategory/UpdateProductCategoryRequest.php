<?php

namespace App\Http\Requests\ProductCategory;

use App\Http\Requests\FormRequest;

class UpdateProductCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:product_categories,title,'.$this->product_category->id.',id', 'max:30']
        ];
    }
}
