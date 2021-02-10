<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
        // dd('test');
        return [
            'current_password' => ['required'],
            // 'password' => 'required|string|min:8',
            // 'password_confirmation' => 'required|string|min:8|same:password'
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        $messages = [
            'current_password.required' => 'This field is required',
            'password.required' => 'This field is required',
            'password.min' => 'Password need to be atleast 8 character',
            'password_confirmation.required' => 'This field is required',
            'password_confirmation.min' => 'Password need to be atleast 8 character',
            'password_confirmation.same' => 'Password Confirmation should match the Password'
        ];

        return $messages;
    }
}
