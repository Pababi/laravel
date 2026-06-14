<?php

namespace App\Http\Controllers\TrapezoidArea;

readonly class TrapezoidAreaResult
{
    public function __construct
    (
        public int $lengthA,
        public int $lengthB,
        public int $height,
        public float $trapezoidArea,
    )
    {

    }

}
