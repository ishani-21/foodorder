<?php

namespace App\Http\Requests\Restaurant;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'      =>  'required|string|max:255|regex:/^[a-zA-Z ]+$/|unique:restaurants',
            'mobile'    =>  'required|max:10|min:10',
            'email'     =>  'required|string|email|max:255|regex:/(.+)@(.+)\.(.+)/i|unique:restaurants',
            'address'   =>  'required',
            'image'     =>  'required',
            'password'  =>  'required',
        ];
    }
}
