<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'  =>  'required|regex:/^[A-Za-z ]+$/',
            'mobile'  =>  'required|max:10|min:10',
            'email'  =>  'required|string|email|max:255|regex:/(.+)@(.+)\.(.+)/i|unique:registers',
            'address'  =>  'required',
            'image'  =>  'required|mimes:jpg,bmp,png',
            'password'  =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'  =>  'Please enter your name',
            'name.regex'  =>  'only alphabates and whitespace allowed !!',
            'mobile.required'  =>  'Please enter your mobile',
            'email.required'  =>  'Please enter your email',
            'address.required'  =>  'Please enter your address',
            'image.required'  =>  'Please enter your image',
            'image.mimes'  =>  'only jpg bmp and png file upload',
            'password.required'  =>  'Please enter your password',
        ];
    }
}
