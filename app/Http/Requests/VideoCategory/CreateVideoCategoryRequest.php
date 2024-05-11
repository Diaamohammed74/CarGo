<?php

namespace App\Http\Requests\VideoCategory;

use App\Http\Requests\FormRequest;

class CreateVideoCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:video_categories,title', 'max:30']
        ];
    }
}
