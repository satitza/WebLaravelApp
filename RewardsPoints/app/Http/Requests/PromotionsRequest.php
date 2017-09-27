<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionsRequest extends FormRequest {

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
            'new_amount' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'new_amount.required' => 'กรุณากรอกจำนวนของรางวัล',
            'new_amount.integer' => 'กรุณากรอกจำนวนของรางวัลเป็นตัวเลข',
        ];
    }

}
