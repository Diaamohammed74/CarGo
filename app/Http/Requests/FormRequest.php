<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

class FormRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();

        // Add 'user_id' to the validated data if it exists
        if ($this->user_id) {
            $validatedData['user_id'] = $this->user_id;
        }

        return $validatedData;
    }
}
