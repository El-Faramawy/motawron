<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCar extends FormRequest
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
            'image'     => 'required_without:num|mimes:jpeg,jpg,png',
            'name'      => 'required',
            'user_name' => 'required|unique:cars,user_name,'.$this->id,
            'password'  => 'required_without:num'
        ];
    }
    public function messages()
    {
        return [
            'image.required_without'     => 'يرجي رفع صورة',
            'name.required'              => 'يرجي ادخال اسم البائع',
            'password.required_without'  => 'يرجي ادخال كلمة المرور',
            'user_name.required'         => 'يرجي ادخال اسم المستخدم',
            'user_name.unique'           => 'اسم المستخدم مسجل من قبل',
            'image.mimes'                =>'صيغه الصوره غير مدعومة',
        ];
    }
}
