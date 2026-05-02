<?php

namespace App\Http\Controllers;

class CircleSController
{
    private function SCircle(int $r)
    {
        $p = 3.14;
        echo "Пи= " . $p;
        echo "Радиус= " . $r;
        $S = $p * $r * $r;
        echo "Площадь круга = " . $S;
    }
}
