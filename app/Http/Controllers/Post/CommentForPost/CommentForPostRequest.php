<?php

namespace App\Http\Controllers\Post\CommentForPost;

use Illuminate\Foundation\Http\FormRequest;

class CommentForPostRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer'],
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email'],
            'topic' => ['required', 'string', 'min:5', 'max:50'],
            'text' => ['required','string', 'min:20', 'max:1000'],
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'Поле id не может быть пустым',
            'id.integer' => 'В поле id должно быть число',
            'name.required' => 'Поле имени не должно быть пустым',
            'name.min' => 'В поле имени должно быть минимум 3 символа',
            'email.required' => 'Поле эл.почты не должно быть пустым',
            'email.email' => 'Поле эл.почты должно быть символ "@"',
            'topic.required' => 'Поле темы не должно быть пустым',
            'topic.min' => 'В поле тема должно быть минимум 5 символов',
            'topic.max' => 'В поле тема максимум 20 символов',
            'text.required' => 'Поле комментария не должно быть пустым',
            'text.min' => 'В поле комментария минимум 20 символов',
            'text.max' => 'В поле комментария максимум 1000 символов'
        ];
    }
}
