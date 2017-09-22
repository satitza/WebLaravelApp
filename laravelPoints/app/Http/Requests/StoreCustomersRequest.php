<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomersRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'กรุณากรอก Customers ID ที่ต้องการค้นหา',
            'name.integer' => 'กรุณากรอก Customers ID เป็นตัวเลข',
        ];
    }

}
