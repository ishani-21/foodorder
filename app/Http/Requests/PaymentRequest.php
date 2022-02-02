<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'card_owner' => 'required|regex:/[A-Za-z]/',
            'card_number' => 'required|regex:/[0-9]/',
            'month' => 'required|regex:/[0-9]/',
            'year' => 'required|regex:/[0-9]/',
            'cvv' => 'required|regex:/[0-9]/',
        ];
    }

    public function messages()
    {
        return [
            'card_owner.required' => 'Please Enter Card Owner Name !',
            'card_owner.regex' => 'Please Enter Only Character !',
            'card_number.required' => 'Please Enter Card Number !',
            'card_number.regex' => 'Please Enter Only Your Card Numbers !',
        ];
    }
}
