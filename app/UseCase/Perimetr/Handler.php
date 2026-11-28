<?php

namespace App\UseCase\Perimetr;

final readonly class Handler
{
    public function __invoke(int $a, int $b) : int
    {
        return $a + $b + $a + $b;
    }
}
