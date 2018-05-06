<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        // return [
        //     'username' => 'required|min:6',
        //     'fullname'      => 'required|min:6',
        // ];
    }

    public function messages(){
        // return [
        //     'username.required' => 'Vui lòng nhập tên đăng nhập',
        //     'username.min' => 'Tên đăng nhập ít nhất 6 ký tự',
        //     'fullname.required'      => 'Vui lòng nhập tên đầy đủ',
        //     'fullname.min'      => 'Tên đầy đủ ít nhất 6 ký tự',
        // ];
    }
}
