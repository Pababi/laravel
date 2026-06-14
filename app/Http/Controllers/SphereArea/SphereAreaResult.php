<?php

namespace App\Http\Controllers\SphereArea;

readonly class SphereAreaResult
{
    public function __construct(
        public int $radius,
        public float $sphereArea,
    ){}

}
