<?php

namespace App\Http\Requests\Video;

use App\Http\Requests\FormRequest;

class CreateVideoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'             => ['required', 'string', 'max:255','unique:videos,title'],
            'description'       => ['required', 'string', 'max:500'],
            'video'             => ['required','bail','file','mimes:mp4'],
            'price'             => ['required', 'numeric', 'min:0'],
            'video_category_id' => ['required', 'exists:video_categories,id'],
            'tag_ids'           => ['nullable','array'],
            'tag_ids.*'         => ['exists:tags,id'],
        ];
    }
}
