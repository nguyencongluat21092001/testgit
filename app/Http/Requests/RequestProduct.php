<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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


    public function rules()
    {
        return[
            'pro_name'=>'required|unique:products,pro_name,'.$this->id,
            'icon'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'không được để trống',
            'name.unique'=>'tên danh mục đã tồn tại',
            'icon.required'=>'không được để trống'
        ];
    }
}