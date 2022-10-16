<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            "title" => 'required|min:3|max:250|regex:/^[A-ZÀ-úa-z\s]+$/',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6000',
            "content" => 'required'
        ];
    }
    public function messages()
    {
        return [
         'name.regex' => 'O nome deve conter apenas letras e espaços'
        ];
    }
}
