<?php

namespace App\Http\Controllers\SphereArea;

use Illuminate\Foundation\Http\FormRequest;

class SphereAreaRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'radius' => ['required', 'integer', 'min:1', 'max_digits:3'],
        ];
    }
    public function messages(): array
    {
        return [
          'radius.required' => 'Поле не должно быть пустым',
          'radius.integer' => 'В поле должно быть число',
          'radius.min' => 'Минимальное число 1',
          'radius.max_digits' => 'Максимальное количество цифр 3'
        ];
    }
}
