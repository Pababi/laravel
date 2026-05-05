<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CircleSRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'r' => ['required', 'integer', 'numeric'],
        ];
    }

    public function messages(): array
    {
        return [
            'r' => 'Неккоректное поле',
            'r.integer' => 'Необходимо корректное число радиуса',
            'r.required' => 'Поле не должно быть пустым'
        ];

    }
}
