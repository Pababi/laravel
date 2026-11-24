<?php

namespace App\Http\Controllers\equation;

use Illuminate\Foundation\Http\FormRequest;

class EquationRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'a'=>['required','integer'],
            'b'=>['required','integer'],
            'c'=>['required','integer'],
        ];
    }
    public function messages(): array
    {
        return [
            'a.required' => "Значение А не должно быть пустым",
            'a.integer' => 'В поле с значением А должно быть число!',
            'b.required' => "Значение B не должно быть пустым",
            'b.integer' => 'В поле с значением B должно быть число!',
            'c.required' => "Значение C не должно быть пустым",
            'c.integer' => 'В поле с значением C должно быть число!',
        ];
    }
}
