<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'username' => 'required|min:3',
            'fullname' => 'required',
            'password' => 'required|min:3'
        ];
    }

    public function messages(){
        return [
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'username.min'      => 'Tên đăng nhập ít nhất 3 ký tự',
            'fullname.required' => 'Vui lòng nhập tên đầy đủ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min'      => 'Mật khẩu phải ít nhất 3 ký tự'
        ];
    }
}
