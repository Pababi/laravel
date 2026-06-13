<?php

namespace App\Http\Controllers\MainDiagonalCube;

class MainDiagonalCubeController
{
    private function mainDiagonalCube(int $length)
    {
        $diagonal = $length * sqrt(3);
        return $diagonal;
    }



}
