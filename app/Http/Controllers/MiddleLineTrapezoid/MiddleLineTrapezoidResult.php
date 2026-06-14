<?php

namespace App\Http\Controllers\MiddleLineTrapezoid;

readonly class MiddleLineTrapezoidResult
{
    public function __construct
    (
        public int $lengthA,
        public int $lengthB,
        public float $middleLength,
    )
    {

    }
}
