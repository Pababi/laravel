<?php

namespace App\Http\Controllers\TrapezoidArea;

class TrapezoidAreaController
{
    private function trapezoidArea(int $lengthA, int $lengthB, int $height)
    {
        $trapezoidArea = ($lengthA + $lengthB)/2 * $height;
        return $trapezoidArea;
    }

}
