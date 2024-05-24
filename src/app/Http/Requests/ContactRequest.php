<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
// バリデーション
    public function rules()
{
    return [
    'firstname' => 'required|string',
    'lastname' => 'required|string',
    'gender'=> 'required',
    'email' => 'required|string|email',
    'tel' => 'required|numeric|regex:/^[0-9-]+$/',
    'address'=> 'required',
    'select' => 'required',
    'content' => 'required|string|max:120'
    ];
}

     public function messages()
     {
         return [
             'firstname.required' => '性を入力してください',
             'lastname.string' => '名を入力してください',
             'gender.required'=>'性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',            
             'email.email' => 'メールアドレスはメールアドレス形式で入力してください',
             'email.max' => 'メールアドレスを255文字以下で入力してください',
             'tel.required' => '電話番号を入力してください',
             'tel.regex:/^[0-9-]+$/'=>'電話番号は5桁までの数字で入力してください',
             'address.required'=> '住所を入力してください',
            'select.required'=> 'お問い合わせの種類を入力してください',
            'content.required'=> 'お問い合わせの内容は120文字以内で入力してください',
             'content.max120'=> 'お問合せ内容は120文字以内で入力してください',

             
         ];
     }
}
