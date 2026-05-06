<?php

namespace App\Http\Controllers;

class TriangleSController
{
    private function TriangleS(int $h, int $a)
    {
        echo 'Высота = ' . $h . '<br>';
        echo 'Длина основания = ' . $a . '<br>';
        $s = 1 / 2 * $a * $h;
        echo 'Площадь треугольника = ' . $s;
    }


}
