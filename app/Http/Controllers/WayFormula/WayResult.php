<?php

namespace App\Http\Controllers\WayFormula;

readonly class WayResult
{
    public function __construct(
        public int $time,
        public int $speed,
        public int $way,
    )
    {

    }

}
