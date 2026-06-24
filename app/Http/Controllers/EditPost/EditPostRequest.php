<?php

namespace App\Http\Controllers\EditPost;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:posts,id'],
            'title' => ['required' , 'string', 'min:3', 'max:60'],
            'description' => ['required' , 'string', 'min:5'],
            'rating' => ['required' , 'integer', 'min:1', 'max:5'],
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'Поле id не должно быть пустым',
            'id.integer' => 'В поле id должно быть число',
            'id.exists' => 'В базе данных не такого id',
            'title.required' => 'Поле заголовка не может быть пустым',
            'title.min' => 'В заголовке минимум должно быть 3 символа',
            'title.max' => 'В поле заголовка  максимум должно быть 60 символов',
            'description.required' => 'Поле описания не может быть пустым',
            'description.min' => 'В описании минимум должно быть 5 символов',
            'rating.required' => 'Поле не может быть пустым',
            'rating.integer' => 'В поле рейтинга должна быть цифра',
            'rating.min' => 'Минимальная оценка - 1',
            'rating.max' => 'Максимальная оценка - 5'
        ];
    }
}
