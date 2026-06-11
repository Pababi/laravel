<?php

namespace App\Http\Controllers\PythagoreanTheorem;

class PythagoreanTheoremController
{
    public function pythagoreanTheorem(int $catheterA , int $catheterB): PythagoreanTheoremResult
    {
        $hypotenuse = sqrt($catheterA * $catheterA + $catheterB * $catheterB);
        return new PythagoreanTheoremResult($catheterA, $catheterB, $hypotenuse);
    }

}
