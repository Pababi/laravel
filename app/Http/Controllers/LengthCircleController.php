<?php

namespace App\Http\Controllers;

class LengthCircleController
{
    private function lengthCircle(int $radius): float
    {
        $pi = 3.14;
        $lengthCircle = 2 * $pi * $radius;
        return $lengthCircle;
    }

}
