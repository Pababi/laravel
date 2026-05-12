<?php

namespace App\Http\Controllers;

class EinsteinFormulaController
{
    private function EinsteinFormula(int $weight): int
    {
        $speedLight = 299792458;
        $energy = $weight * $speedLight * $speedLight;
        return $energy;
    }

}
