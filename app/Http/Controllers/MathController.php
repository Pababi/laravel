<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController
{
    private function quadraticEquation(int $a, int $b, int $c) {
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

    }
    public function mathForm()
    {
        $html = '<form method="POST" action="/math">
        <input type="text" name="a" value="2" placeholder="Значение а">
        <input type="text" name="b" value="2" placeholder="Значение b">
        <input type="text" name="c" value="2" placeholder="Значение c">
        <input type="submit">
        </form>';
        return $html;
    }
    public function mathFormPost(Request $request)
    {
        $array=$request->all();
        $this->quadraticEquation($array['a'],$array['b'],$array['c']);
    }
}
