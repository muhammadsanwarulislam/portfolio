<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'     => 'required|string|email',
            'password'  => 'required|string|min:8|max:255',
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'The email field is required.',
            'password.required' => 'The password field is required.',
            'password.min'      => 'The password length must be at least 8 characters',

        ];
    }
}
