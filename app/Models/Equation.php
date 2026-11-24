<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equation extends Model
{
    public static function createDecision(int $a, int $b, int $c, int $discriminant,string $answer): self
    {
        $equation = new self();
        $equation->valueA = $a;
        $equation->valueB = $b;
        $equation->valueC = $c;
        $equation->discriminant = $discriminant;
        $equation->answer = $answer;
        return $equation;
    }
}
