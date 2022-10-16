<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
   public function authorize()
   {
       return true;
   }

   public function rules()
   {
       return [
           "name" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
           "email" => 'required|email|unique:users,email',
           "contact" => 'required',
           "birthdate" => 'required|date',
           "nif" => 'required',
           "role" => 'required|in:N,A',
           'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000'
       ];
   }
   public function messages()
   {
       return [
           'name.regex' => 'O nome só pode conter apenas espaços e letras'
       ];
   }
}
