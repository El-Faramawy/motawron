<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'image' => 'required_without:num|mimes:jpeg,jpg,png',
            'name'  => 'required',
            'price' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'image.required_without' => 'يرجي رفع صورة',
            'name.required'          => 'يرجي ادخال اسم المنتج',
            'price.required'         => 'يرجي ادخال سعر المنتج',
            'image.mimes'            =>'صيغه الصوره غير مدعومة',
        ];
    }
}
