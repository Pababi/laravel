<?php

namespace App\Http\Controllers\Post\ReadPost;

use Illuminate\Foundation\Http\FormRequest;

class ReadPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:posts,id'],
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'Поле не может быть пустым',
            'id.integer' => 'В поле должно быть число',
            'id.exists' => 'В базе данных нет такого id'
        ];
    }
}
