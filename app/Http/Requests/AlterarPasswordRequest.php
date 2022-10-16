<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\VerifyPass;

class AlterarPasswordRequest extends FormRequest
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
        return
        [
            'password_ant' => ['required', 'string', 'min:8',new VerifyPass()],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
