<?php

namespace App\Http\Controllers\Category\EditCategory;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:categories,id'],
            'title' => ['required', 'string', 'min:3'],
            'topic' => ['required', 'string', 'min:5', 'max:10'],
            'description' => ['required','string', 'min:10', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'Поле id не должно быть пустым',
            'id.integer' => 'В поле id должно быть число',
            'id.exists' => 'В базе данных не такого id',
            'title.required' => 'Поле названия не должно быть пустым',
            'title.min' => 'В поле имени должно быть минимум 3 символа',
            'topic.required' => 'Поле темы не должно быть пустым',
            'topic.min' => 'В поле тема должно быть минимум 5 символов',
            'topic.max' => 'В поле тема максимум 10 символов',
            'description.required' => 'Поле описания не должно быть пустым',
            'description.min' => 'В поле описания минимум 10 символов',
            'description.max' => 'В поле описания максимум 100 символов'
        ];
    }
}
