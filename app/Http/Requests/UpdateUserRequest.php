<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email, '.$this->id.'|max:191',
            'name' => 'required|string',
            'user_catalogue_id' => 'required|integer|gt:0',


        ];
    }

    public function messages(): array
    {
        return[
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Email chưa đúng định dạng! Ví dụ abc@mail.com',
            'email.unique' => 'Email đã tồn tại. Hãy nhập email khác',
            'email.string' => 'Email phải là dạng ký tự',
            'email.max' => 'Email tối đa 191 ký tự',
            'name.required' => 'Vui lòng nhập Họ Tên',
            'name.string' => 'Họ tên phải là dạng ký tự',
            'user_catalogue_id.gt' => 'Vui lòng chọn một Nhóm',

        ];
    }
}
