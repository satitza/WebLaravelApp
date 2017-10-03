<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'points_settings' => 'required|integer|between:1,1000',
        ];
    }

    public function messages() {
        return [
            'points_settings.required' => 'กรุณากรอกจำนวนสำหรับคิดคะแนน',
            'points_settings.integer' => 'กรุณากรอกจำนวนเป็นตัวเลข',
            'points_settings.between' => 'กรุณากรอกเป็นตัวเลขหว่าง 1 ถึง 1000',
        ];
    }
}
