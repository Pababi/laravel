<?php

namespace App\Http\Controllers\MiddleLineTrapezoid;

use Illuminate\Foundation\Http\FormRequest;

class MiddleLineTrapezoidRequst extends FormRequest
{
    public function rules(): array
    {
        return [
            'lengthA' => ['required', 'integer', 'min:1', 'max:100', 'max_digits:3'],
            'lengthB' => ['required', 'integer', 'min:1', 'max:100', 'max_digits:3'],
        ];
    }
    public function messages(): array
    {
        return [
            'lengthA.required' => 'Поле не должно быть пустым',
            'lengthA.integer' => 'В поле должно быть число',
            'lengthA.min' => 'Минимальное значение в поле A 1',
            'lengthA.max' => 'Максимальное значение в поле B 100',
            'lengthA.max_digits' => 'Максимальное количество цифр в поле "длина A" 3',
            'lengthB.required' => 'Поле не должно быть пустым',
            'lengthB.integer' => 'В поле должно быть число',
            'lengthB.min' => 'Минимальное значение в поле B 1',
            'lengthB.max' => 'Максимальное значение в поле B 100',
            'lengthB.max_digits' => 'Максимальное количество цифр в поле "длина B" 3',
        ];
    }
}
