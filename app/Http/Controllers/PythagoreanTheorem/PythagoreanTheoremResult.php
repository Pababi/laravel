<?php

namespace App\Http\Controllers\PythagoreanTheorem;

readonly class PythagoreanTheoremResult
{
    public function __construct(
        public int $catheterA,
        public int $catheterB,
        public float $hypotenuse
    ){}

}
