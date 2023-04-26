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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_name'=>['required'],
            'password' =>['required']
        ];
    }
    public function message()
    {
        return[
            'user_name'=>'Please fill your name',
            'password' => 'Please fill your password',
        ];
    }
}
