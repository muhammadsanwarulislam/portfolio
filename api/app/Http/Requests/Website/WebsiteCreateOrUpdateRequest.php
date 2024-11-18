<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WebsiteCreateOrUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        if ($this->isMethod('patch')) {
            $rules['is_verified'] = 'sometimes|in:0,1';
        } else {
            $rules = [
                'url'               => 'required|string',
                'status'            => ['nullable', Rule::in(['free', 'annual', 'monthly'])],
            ];
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'url.required'              => 'The url field is required',
            'status.in'                 => 'The selected status is invalid',
            'is_verified.in'            => 'The is_verified field must be 0 or 1',
        ];
    }
}
