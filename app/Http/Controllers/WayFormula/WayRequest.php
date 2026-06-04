<?php

namespace App\Http\Controllers\WayFormula;

use Illuminate\Foundation\Http\FormRequest;

class WayRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'speed' => ['required', 'integer', 'numeric'],
            'time' => ['required', 'integer', 'numeric'],
        ];
    }
    public function messages(): array
    {
        return [
            'speed.required' => 'Поле скорости не может быть пустым',
            'speed.integer' => 'Значение скорости должно быть целым',
            'speed.numeric' => 'В поле скорости должно быть число',
            'time.required' => 'Поле времени не может быть пустым',
            'time.integer' => 'Значение времени должно быть целым',
            'time.numeric' => 'В поле времени должно быть число',
        ];
    }

}
