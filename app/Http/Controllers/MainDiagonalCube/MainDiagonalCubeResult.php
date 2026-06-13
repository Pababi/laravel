<?php

namespace App\Http\Controllers\MainDiagonalCube;

readonly class MainDiagonalCubeResult
{
    public function __construct(
        public int $length,
        public float $diagonal
    ){}

}
