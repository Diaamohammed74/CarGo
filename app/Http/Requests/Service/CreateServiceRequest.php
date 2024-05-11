<?php

namespace App\Http\Requests\Service;

use App\Http\Requests\FormRequest;

class CreateServiceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'               => ['required', 'string', 'max:255','unique:services,title'],
            'image'               => ['required','bail','file','image','mimes:jpg,jpeg,png,gif,svg,webp'],
            'description'         => ['nullable', 'string', 'max:500'],
            'price'               => ['required', 'numeric', 'min:0'],
            'specialization_id'   => ['required', 'exists:specializations,id'],
            'service_category_id' => ['required', 'exists:service_categories,id'],
            'tag_ids'             => ['nullable','array'],
            'tag_ids.*'           => ['exists:tags,id'],
        ];
    }
}
