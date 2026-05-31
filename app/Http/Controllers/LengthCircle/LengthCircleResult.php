<?php

namespace App\Http\Controllers\LengthCircle;

readonly class LengthCircleResult
{
    public function __construct(
        public float $pi,
        public float $lengthCircle,
    ){}

}
