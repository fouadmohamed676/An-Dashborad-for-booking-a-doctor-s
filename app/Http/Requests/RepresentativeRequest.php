<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepresentativeRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required',
            'city_id'=>'required',
            'zone'=>'required',
            'car_type'=>'required',
            'commission'=>'required',
            'nationality'=>'required',
            'subordination'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'هذا الحقل مطلوب'
        ];
    }
}
