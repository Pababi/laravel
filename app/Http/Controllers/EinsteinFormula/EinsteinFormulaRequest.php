<?php

namespace App\Http\Controllers\EinsteinFormula;

use Illuminate\Foundation\Http\FormRequest;

class EinsteinFormulaRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'weight' => ['required', 'numeric']
        ];
    }

    public function messages(): array
    {
        return [
            'weight.numeric' => 'В поле должно быть число',
            'weight.required' => 'Поле не должно быть пустым'
        ];
    }
}
