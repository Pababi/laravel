<?php

namespace App\Http\Controllers\TrapezoidArea;

use Illuminate\Foundation\Http\FormRequest;

class TrapezoidAreaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'lengthA' => ['required', 'integer', 'min:1', 'max_digits:3'],
            'lengthB' => ['required', 'integer', 'min:1', 'max_digits:3'],
            'height' => ['required', 'integer', 'min:1', 'max_digits:3'],
        ];
    }
    public function messages(): array
    {
        return [
            'lengthA.required' => 'Поле не должно быть пустым',
            'lengthA.integer' => 'В поле должно быть число',
            'lengthA.min' => 'Минимальное число 1',
            'lengthA.max_digits' => 'Максимальное количество цифр 3',
            'lengthB.required' => 'Поле не должно быть пустым',
            'lengthB.integer' => 'В поле должно быть число',
            'lengthB.min' => 'Минимальное число 1',
            'lengthB.max_digits' => 'Максимальное количество цифр 3',
            'height.required' => 'Поле не должно быть пустым',
            'height.integer' => 'В поле должно быть число',
            'height.min' => 'Минимальное число 1',
            'height.max_digits' => 'Максимальное количество цифр 3'
        ];
    }
}
