<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function autorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string'
        ];
    }
}
