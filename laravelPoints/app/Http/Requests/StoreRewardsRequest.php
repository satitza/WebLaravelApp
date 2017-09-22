<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRewardsRequest extends FormRequest {

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
            'reward_name' => 'required',
        ];
    }

    public function messages() {
        return [
            'reward_name.required' => 'กรุณากรอกชื่อของรางวัล',
                //'reward_detial.required' => 'กรุณากรอกรายละเอียดของรางวัล',
                //'reward_amount.required' => 'กรุณากรอกจำนวนของรางวัลที่ต้องการจะเพิ่มลงในฐานข้อมูล',
                //'reward_amount.integer' => 'กรุณากรอกจำนวนของรางวัลเป็นตัวเลข',
                //'reward_points.required' => 'กรุณากรอกคะแนนสำหรับแลกของรางวัลชิ้นนี้',
                //'reward_points.integer' => 'กรุณากรอกคะแนนเป็นตัวเลข'
        ];
    }

}
