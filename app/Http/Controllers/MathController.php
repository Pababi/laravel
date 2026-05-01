<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class MathController
{
    private function quadraticEquation(int $a, int $b, int $c, string $name, string $surname) {
        echo "a=" . $a . "<br>";
        echo "b=" . $b . "<br>";
        echo "c=" . $c . "<br>";
        $d = $b * $b - 4 * $a * $c;
        echo "D = " . $d . "<br>";
        if ($d < 0 ){
            echo "D меньше 0<br>";
            echo "Действительных корней нет<br>";
        } elseif ($d == 0 ){
            echo "D равно 0<br>";
            $x1 = -$b / 2 * $a;
            echo "x1 = " . $x1 . "<br>";
        }
        else {
            echo "D больше 0<br>";
            $x1 = -$b + sqrt($d) / 2 * $a;
            $x2 = -$b - sqrt($d) / 2 * $a;
            echo "x1 = " . $x1 . "<br>";
            echo "x2 = " . $x2 . "<br>";
        }
        echo 'Ваша фамилия - '. $surname. '<br>';
        echo 'Ваше имя - ' .$name. '<br>';

    }
    public function mathForm()
    {
        $html = '<form method="POST" action="/math">
      <input type="text" name="a" placeholder="Значение а">
        <input type="text" name="b"  placeholder="Значение b">
        <input type="text" name="c"  placeholder="Значение c">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="text" name="name" placeholder="Имя">
        <input type="submit">
        </form>';
        echo $html;

        // Или так (более безопасно)
        $errors = session('errors', collect()); // Если ошибок нет - пустая коллекция

        // Теперь можно использовать $errors
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo $message . '<br>'; // или добавить в HTML
            }
        }
    }
    public function mathFormPost(Request $request)
    {

        $validated = $request->validate([

            'a' => ['required', 'integer'],
            'b' => ['required', 'integer'],
            'c' => ['required', 'integer'],
            'surname' => ['required', 'min:3', 'ascii', 'max:17'],
            'name' => ['required', 'min:3', 'ascii', 'max:58'],
        ]);
        $this->quadraticEquation($validated['a'],$validated['b'],$validated['c'] ,$validated['surname'],$validated['name']);
    }

}
