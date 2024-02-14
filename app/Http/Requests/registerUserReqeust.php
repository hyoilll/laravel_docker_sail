<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerUserReqeust extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'name.required'         => '名前は必須です。',
            'name.max'              => '名前は最大255文字まで入力してください。',
            'email.required'        => 'メールアドレスは必須です。',
            'email.email'           => 'メールアドレスの形式が正しくありません。',
            'email.max'             => 'メールアドレスは最大255文字まで入力してください。',
            'email.unique'          => 'すでに登録されているメールアドレスです。',
            'password.required'     => 'パスワードは必須です。',
            'password.confirmed'    => 'パスワードが一致していません。',
            'password.min'          => 'パスワードは最小8文字から入力してください。'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|confirmed|min:8'
        ];
    }
}
