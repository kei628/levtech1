<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
  
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title' =>'required|string|max:100', //空欄でないこと｜文字列であること｜文字数制限
            'post.body' =>'required|string|max:4000',
        ]; 
    }
}
