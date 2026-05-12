<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TriangleAreaRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'length' => ['required', 'integer', 'numeric'],
            'height' => ['required', 'integer', 'numeric'],
        ];
    }
    public function messages(): array
    {
        return [
            'length.required' => 'Поле не должно быть пустым',
            'length.integer' => 'Число в поле a должно быть целым',
            'length.numeric' => 'В поле a должно быть число',
            'height.required' => 'Поле не должно быть пустым',
            'height.integer' => 'Число в поле h должно быть целым',
            'height.numeric' => 'В поле h должно быть число'
        ];
    }
}
