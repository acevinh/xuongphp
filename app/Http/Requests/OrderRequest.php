<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ten_nguoi_nhan' => 'required|string|max:255',
            'so_dien_thoai' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|string|email|max:255',
            'dia_chi' => 'required|string|max:255',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages() 
    {
        return [
            'ten_nguoi_nhan.required' => 'Tên là bắt buộc',
            'ten_nguoi_nhan.string' => 'Tên phải là chuỗi ký tự',
            'ten_nguoi_nhan.max' => 'Tên không được vượt quá 255 ký tự',
            'so_dien_thoai.required' => 'Số điện thoại là bắt buộc',
            'so_dien_thoai.string' => 'Số điện thoại phải là chuỗi ký tự',
            'so_dien_thoai.regex' => 'Định nghĩa số điện thoại không hợp lệ',
            'so_dien_thoai.min' => 'Số điện thoại phải có ít nhất 10 ký tự',
            'email.required' => 'Email là bắt buộc',
            'email.string' => 'Email phải là chuỗi ký tự',
            'email.email' => 'Email không hợp lệ',
            'email.max' => 'Email không được vượt quá 255 ký tự',
            'dia_chi.required' => 'Địa chỉ là bắt buộc',
            'dia_chi.string' => 'Địa chỉ phải là chuỗi ký tự',
            'dia_chi.max' => 'Địa chỉ không được vượt quá 255 ký tự',
        ];
    }
}
