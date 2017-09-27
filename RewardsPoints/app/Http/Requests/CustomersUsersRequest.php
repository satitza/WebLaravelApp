<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersUsersRequest extends FormRequest
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
     public function rules() {
        return [
              'customers_id' => 'required|integer'
        ];
    }

    public function messages() {
        return [
              'customers_id.required' => 'กรุณากรอก Customers ID',
              'customers_id.integer' => 'กรุณากรอก Customers ID เป็นตัวเลข'    
        ];
    }
}
