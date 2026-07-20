<?php

namespace App\Http\Controllers\Category\NewCategory;

use Illuminate\Foundation\Http\FormRequest;

class NewCategoryRequest extends FormRequest
{

      public function rules(): array
    {
        return [
            'title' => ['required' , 'string', 'min:3', 'max:10'],
            'topic' => ['required', 'string', 'min:3', 'max:10'],
            'rating' => ['required' , 'integer', 'min:1', 'max:5'],
            'description' => ['required' , 'string', 'min:5'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле не может быть пустым',
            'title.min' => 'В заголовке минимум должно быть 3 символа',
            'title.max' => 'Максимум максимум должно быть 10 символов',
            'description.required' => 'Поле не может быть пустым',
            'description.min' => 'В описании минимум должно быть 5 символов',
            'rating.required' => 'Поле не может быть пустым',
            'rating.integer' => 'В поле рейтинга должна быть цифра',
            'rating.min' => 'Минимальная оценка - 1',
            'rating.max' => 'Максимальная оценка - 5',
            'topic.required' => 'Поле темы не может быть пустым',
            'topic.min' => 'В поле темы минимум 3 символа',
            'topic.max' => 'В поле темы максимум 10 символов'
        ];
    }

}
