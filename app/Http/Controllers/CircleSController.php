<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class CircleSController
{
    private function SCircle(int $r)
    {
        $p = 3.14;
        echo "π= " . $p . '<br>';
        echo "R= " . $r. '<br>';
        $S = $p * $r * $r;
        echo "Площадь круга = " . $S;
    }

    public function circleForm()
    {
        $html = '<form method="POST" action="/circle">
      <input type="text" name="r" placeholder="Значение r">
        <input type="submit">
        </form>';
        echo $html;

        // Или так (более безопасно)
        $errors = session('errors', collect()); // Если ошибок нет - пустая коллекция

        // Теперь можно использовать $errors
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo "<span style=\"color: red;\">$message</span>" . '<br>';
            } // или добавить в HTML
        }
    }

    public function circleFormPost(Request $request)
    {
        $validated = $request->validate([
            'r' => ['required', 'integer', 'numeric'],
        ]);
        $this->SCircle($validated['r']);
    }
}
