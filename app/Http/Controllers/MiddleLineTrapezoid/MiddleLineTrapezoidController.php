<?php

namespace App\Http\Controllers\MiddleLineTrapezoid;

class MiddleLineTrapezoidController
{
    private function middleLineTrapezoid(int $lengthA, int $lengthB)
    {
        $middleLength = ($lengthA + $lengthB) / 2;
        return $middleLength;
    }

}
