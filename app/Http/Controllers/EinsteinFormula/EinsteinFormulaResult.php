<?php

namespace App\Http\Controllers\EinsteinFormula;

readonly class EinsteinFormulaResult
{
    public function __construct(
        public int $speedLight,
        public int $energy,
    )
    {
    }

}
