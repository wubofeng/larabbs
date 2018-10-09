<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'cont' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            'cont.required' => '内容至少为2个字符',
            'cont.min' => '内容至少为2个字符',
        ];
    }
}
