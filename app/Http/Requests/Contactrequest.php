<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contactrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'captcha'              => 'required|captcha',
            'name'                 => 'required',
            'contactno'            => 'required|numeric|digits:10',
            'companyname'          => 'required',
            'companyemail'         => 'required|email', 
            
        ];
    }
    public function messages()
    {
    return ['captcha.captcha' => 'Invalid captcha values'];
    }
}
