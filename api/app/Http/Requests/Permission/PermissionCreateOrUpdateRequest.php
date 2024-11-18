<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class PermissionCreateOrUpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'          => 'required|max:15',
            'module_id'     => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The permission name is required',
            'name.max'      => 'The permission name must be at most 15 characters long',
            'module_id.required' => 'Module id is required',
        ];
    }
}
