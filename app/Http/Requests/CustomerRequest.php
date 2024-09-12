<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'restaurant_name'=>'required',
            'phone'=>'required',
            'logo' =>'required_without:id|mimes:jpeg,png,jpg,gif',
            'zone'=>'required',
            'city_id'=>'required',
            'neighborhood'=>'required',
            'address'=>'required',
            'admin_number'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'internal_price'=>'required',
            'external_price'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'required'=>'هذا الحقل مطلوب'
        ];
    }
}
