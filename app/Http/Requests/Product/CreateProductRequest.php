<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\FormRequest;



class CreateProductRequest extends FormRequest
{
    public function rules(): array
    {
            return [
                'title'               => ['required', 'string', 'max:255','unique:products,title'],
                'image'               => ['required','bail','file','image','mimes:jpg,jpeg,png,gif,svg,webp'],
                'description'         => ['nullable', 'string', 'max:500'],
                'price'               => ['required', 'numeric', 'min:0'],
                'product_category_id' => ['required', 'exists:product_categories,id'],
            ];
    }
}
