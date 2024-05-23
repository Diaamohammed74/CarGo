<?php

namespace App\Http\Requests\VideoCategory;

use App\Http\Requests\FormRequest;

class UpdateVideoCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:video_categories,title','max:30'] //.$this->video_category->id
        ];
    }
}
