<?php

namespace App\Http\Controllers\PythagoreanTheorem;

use Illuminate\Foundation\Http\FormRequest;

class PythagoreanTheoremRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'catheterA' => ['required', 'integer', 'min:1', 'max:100', 'min_digits:1', 'max_digits:3'],
            'catheterB' => ['required', 'integer', 'min:1', 'max:100', 'min_digits:1', 'max_digits:3'],
        ];
    }

    public function messages(): array
    {
        return [
            'catheterA.required' => 'Поле не должно быть пустым',
            'catheterA.integer' => 'В поле должно быть число',
            'catheterA.min' => 'Минимальное значение A больше или равно 1',
            'catheterA.max' => 'Максимальное значение А больше или равно 100',
            'catheterA.min_digits' => 'Минимальное количество цифр в поле катета A 1',
            'catheterA.max_digits' => 'Максимальное количество цифр в поле катета A 3',
            'catheterB.required' => 'Поле не должно быть пустым',
            'catheterB.integer' => 'В поле должно быть число',
            'catheterB.min' => 'Минимальное значение В больше или равно 1',
            'catheterB.max' => 'Максимальное значение В больше или равно 100',
            'catheterB.min_digits' => 'Минимальное количество цифр в поле катета B 1',
            'catheterB.max_digits' => 'Максимально количество цифр в поле катета B 3'
        ];
    }
}
