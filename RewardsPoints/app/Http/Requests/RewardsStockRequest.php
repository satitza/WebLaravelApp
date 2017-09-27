<?php
namespace App\Http\Requests;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Foundation\Http\FormRequest;

class RewardsStockRequest extends FormRequest {

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
            'reward_detial' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'reward_amount' => 'required|integer',
            'reward_points' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'reward_name.required' => 'กรุณากรอกชื่อของรางวัล',
            'reward_detial.required' => 'กรุณากรอกรายละเอียดของรางวัล',
            'image.required' => 'กรุณาอัพโหลดรูปภาพของรางวัล',
            'image.mimes' => 'กรุณาเลือกไฟล์รูปภาพเป็น jpeg, png, jpg, gif ขนาดไม่เกิน 2 MB',
            'image.max' => 'ไฟล์รูปภาพใหญ่เกินขนาดที่กำหนด',
            'reward_amount.required' => 'กรุณากรอกจำนวนของรางวัล',
            'reward_amount.integer' => 'กรุณากรอกจำนวนของรางวัลเป็นตัวเลข',
            'reward_points.required' => 'กรุณากรอกคะแนนสำหรับแลกของรางวัล',
            'reward_points.integer' => 'กรุณากรอกคะแนนสำหรับแลกของรางวัลเป็นตัวเลข',
        ];
    }

}

?>

