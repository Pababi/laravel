<?php

namespace App\Http\Controllers\LengthCircle;

use Illuminate\Foundation\Http\FormRequest;

class LengthCircleRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'radius' => ['required', 'integer', 'numeric'],
        ];
    }

    public function messages(): array
    {
        return [
            'radius' => 'Некорректное поле',
            'radius.integer' => 'Необходимо корректное число радиуса',
            'radius.required' => 'Поле не должно быть пустым',
            'radius.numeric' => 'В поле должно быть число'
        ];

    }
}
