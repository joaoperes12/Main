<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLandingRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "email" => 'required|email|unique:users,email',
            "contact" => 'required',
        ];
    }
    public function messages()
    {
        return [
         'name.regex' => 'O nome deve conter apenas letras e espaços'
        ];
    }
}
