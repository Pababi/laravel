<?php

namespace App\Http\Controllers\equation;

use Illuminate\Http\Request;

class EquationController
{
    public function equationForm() : void
    {
        $html = '
        <form method="POST" action="/equation">
        <input type="text" name="a" placeholder="Значение A">
        <input type="text" name="b" placeholder="Значение B">
        <input type="text" name="c" placeholder="Значение C">
        <input type="submit" value="Посчитать"></form>';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color:red">' . $message . '</span>';
            }
        }

    }
    private function discriminant(int $a, int $b, int $c)
    {
        $discriminant = $b * $b - 4 * $a * $c;
        echo $discriminant;
        return $discriminant;
    }
    private function equationCalculation(int $a, int $b, int $c)
    {
        $discriminant = $this->discriminant($a, $b, $c);
        if ($discriminant < 0)
        {
            $answer = 'Дискриминант меньше 0, корней нет';
            return $answer;
        } elseif ($discriminant == 0)
        {
            $x = -$b / 2 * $a;
            return $x;
        } else {
            $x1 = -$b + sqrt($discriminant) / 2 * $a;
            $x2 = -$b - sqrt($discriminant) / 2 * $a;
            return $x1 && $x2;
        }

    }

}
