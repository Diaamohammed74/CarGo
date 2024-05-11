<?php

namespace App\Http\Requests\Tag;

use App\Http\Requests\FormRequest;

class UpdateTagRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:tags,title,'.$this->tag->id.',id'],
        ];
    }
}
