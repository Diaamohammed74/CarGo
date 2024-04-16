<?php

namespace App\Http\Requests;

use App\Http\Traits\Api\ApiResponse;
use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Validation\ValidationException;

class FormRequest extends BaseFormRequest
{
    use ApiResponse;
    public function authorize(): bool
    {
        return true;
    }
    public function failedValidation($validator)
    {
        $response = $this->apiResponse($validator->errors(), __('http-statuses.422'), 422);
        throw new ValidationException($validator, $response);
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
