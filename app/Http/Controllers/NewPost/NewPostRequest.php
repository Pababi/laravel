<?php

namespace App\Http\Controllers\NewPost;

use Illuminate\Foundation\Http\FormRequest;

class NewPostRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => ['required' , 'string', 'min:3', 'max:60'],
            'description' => ['required' , 'string', 'min:5'],
            'rating' => ['required' , 'integer', 'min:1', 'max:5'],
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Поле не может быть пустым',
            'title.min' => 'В заголовке минимум должно быть 3 символа',
            'title.max' => 'Максимум максимум должно быть 60 символов',
            'description.required' => 'Поле не может быть пустым',
            'description.min' => 'В описании минимум должно быть 5 сиволов',
            'rating.required' => 'Поле не может быть пустым',
            'rating.integer' => 'В поле рейтинга должна быть цифра',
            'rating.min' => 'Минимальная оценка - 1',
            'rating.max' => 'Максимальная оценка - 5'
        ];
    }
}
