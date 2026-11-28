<?php

namespace App\UseCase\Discriminant;

final readonly class ResultDto
{
    public function __construct(
        public int    $discriminant,
        public int    $a,
        public int    $b,
        public int    $c,
        public string $x,
    )
    {
    }
}
