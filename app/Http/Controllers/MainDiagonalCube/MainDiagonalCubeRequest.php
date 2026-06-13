<?php

namespace App\Http\Controllers\MainDiagonalCube;

use Illuminate\Foundation\Http\FormRequest;

class MainDiagonalCubeRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'length' => ['required', 'integer', 'min_digits:1', 'max_digits:10', 'min:1']
        ];
    }

    public function messages(): array
    {
        return [
            'length.required' => 'Поле не должно быть пустым',
            'length.integer' => 'В поле должно быть число',
            'length.min_digits' => 'Минимальное количество цифр в поле 1',
            'length.max_digits' => 'Максимальное количество цифр в поле 10',
            'length.min' => 'Минимальное число 1'
        ];
    }
}
