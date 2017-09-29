<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RewardsStockUpdateRequest extends FormRequest
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
            'reward_name' => 'required',
            'reward_detial' => 'required',
            'reward_amount' => 'required|integer|between:1,1000',
            'reward_points' => 'required|integer|between:1,100000',
        ];
    }

    public function messages() {
        return [
            'reward_name.required' => 'กรุณากรอกชื่อของรางวัล',
            'reward_detial.required' => 'กรุณากรอกรายละเอียดของรางวัล',
            'reward_amount.required' => 'กรุณากรอกจำนวนของรางวัล',
            'reward_amount.integer' => 'กรุณากรอกจำนวนของรางวัลเป็นตัวเลข',
            'reward_amount.between' => 'กรุณากรอกจำนวนของรางวัลเป็นตัวเลขหว่าง 1 ถึง 1000',
            'reward_points.required' => 'กรุณากรอกคะแนนสำหรับแลกของรางวัล',
            'reward_points.integer' => 'กรุณากรอกคะแนนสำหรับแลกของรางวัลเป็นตัวเลข',
            'reward_points.between' => 'กรุณากรอกคะแนนสำหรับแลกของรางวัลเป็นตัวเลขหว่าง 1 ถึง 100000',
        ];
    }
}
