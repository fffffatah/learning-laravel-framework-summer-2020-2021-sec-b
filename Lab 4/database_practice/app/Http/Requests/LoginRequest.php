<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login_email' => 'required',
            'login_pass'=> 'required|min:5'
        ];
    }
    public function messages(){
        return [
            'login_email.required' => '* Email Required',
            'login_pass.min' => '* Minimum 5 Characters',
            'login_pass.required' => '* Email Required',
        ];
    }
}
