<?php

namespace App\Http\Controllers;

use App\Http\Requests\CircleSRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class CircleSController
{
    private function areaCircle(int $radius)
    {
        $pi = 3.14;
        $Area = $pi * $radius * $radius;
        return $Area;
    }

    public function circleForm()
    {
        $html = '<form method="POST" action="/circle">
      <input type="text" name="radius" placeholder="Значение r">
        <input type="submit">
        </form>';
        echo $html;

        // Или так (более безопасно)
        $errors = session('errors', collect()); // Если ошибок нет - пустая коллекция

        // Теперь можно использовать $errors
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            } // или добавить в HTML
        }
    }

    public function circleFormPost(CircleSRequest $request)
    {
        $data = $request->all();
        $radius = $data['radius'];
        $Area = $this->areaCircle($radius);
        $pi=3.14;

        echo "π= " . $pi . '<br>';
        echo "R= " . $radius . '<br>';
        echo "Площадь круга = " . $Area;
    }
}
