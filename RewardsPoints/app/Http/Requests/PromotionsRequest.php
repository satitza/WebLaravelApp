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
            'reward_code' => 'required',
            'reward_amount' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'reward_code.required' => 'กรุณากรอกรหัสของรางวัล',
            'reward_amount.required' => 'กรุณากรอกจำนวนของรางวัล',
            'reward_amount.integer' => 'กรุณากรอกจำนวนของรางวัลเป็นตัวเลข',
        ];
    }

}
