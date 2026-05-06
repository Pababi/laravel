<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TriangleSRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'a' => ['required', 'integer', 'numeric'],
            'h' => ['required', 'integer', 'numeric'],
        ];
    }
    public function messages(): array
    {
        return [
            'a.required' => 'Поле не должно быть пустым',
            'a.integer' => 'Число в поле a должно быть целым',
            'a.numeric' => 'В поле a должно быть число',
            'h.required' => 'Поле не должно быть пустым',
            'h.integer' => 'Число в поле h должно быть целым',
            'h.numeric' => 'В поле h должно быть число'
        ];
    }
}
