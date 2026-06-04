<?php

namespace App\Http\Controllers\TriangleArea;

readonly class TriangleAreaResult
{
    public function __construct(
        public int $length,
        public int $height,
        public float $area,
    )
    {

    }

}
