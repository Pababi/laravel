<?php

namespace App\Http\Controllers\equation\UseCase;

use App\Models\Equation;

class Discriminant
{
    public function __invoke(int $a, int $b, int $c): ResultDto
    {
        $discriminantsss416541568418541 = $this->discriminant($a, $b, $c);
        $answer = $this->equationCalculation($a, $b, $c);
        $base = Equation::createDecision($a, $b, $c, $discriminantsss416541568418541, $answer);
        $base->save();

        return new ResultDto(
            $discriminantsss416541568418541,
            $a,
            $b,
            $c,
            $answer,
        );
    }
    private function discriminant(int $a, int $b, int $c)
    {
        $discriminant = $b * $b - 4 * $a * $c;
        return $discriminant;
    }
    private function equationCalculation(int $a, int $b, int $c)
    {
        $discriminant = $this->discriminant($a, $b, $c);
        if ($discriminant < 0)
        {
            $answer = 'Дискриминант меньше 0, корней нет';
            return $answer;
        } elseif ($discriminant == 0)
        {
            $x = -$b / 2 * $a;
            return 'X= '.$x;
        } else {
            $x1 = -$b + sqrt($discriminant) / 2 * $a;
            $x2 = -$b - sqrt($discriminant) / 2 * $a;
            return 'x1= '.$x1 . ' x2= '. $x2;
        }

    }
}
