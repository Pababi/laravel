<?php

namespace App\UseCase\Discriminant;

use App\Models\Equation;

class Handle
{
    public function __invoke(int $a, int $b, int $c): ResultDto
    {
        $discriminant = $this->discriminant($a, $b, $c);
        $answer = $this->equationCalculation($a, $b, $discriminant);

        $base = Equation::createDecision($a, $b, $c, $discriminant, $answer);
        $base->save();

        return new ResultDto(
            $discriminant,
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
    private function equationCalculation(int $a, int $b, int $discriminant)
    {

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
