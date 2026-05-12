<?php

namespace App\Http\Controllers;

use App\Http\Requests\EinsteinFormulaRequest;

class EinsteinFormulaController
{
    private function einsteinFormula(int $weight): int
    {
        $speedLight = 299792458;
        $energy = $weight * $speedLight * $speedLight;
        return $energy;
    }
    public function einsteinFormulaForm()
    {
        $html = '<form action="/einstein" method="post">
        <input type="text" name="weight" placeholder="Масса">
        <input type="submit">
        </form>';

        echo $html;

        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            }
        }

    }
    public function einsteinFormulaFormPost(EinsteinFormulaRequest $request)
    {
        $weight = $request['weight'];
        $speedLight = 299792458;
        $energy = $this->einsteinFormula($weight);

        echo 'Масса= '. $weight . '<br>';
        echo 'Скорость света= '. $speedLight . '<br>';
        Echo 'Эквивалентность массы и энергии= '. $energy . '<br>';
    }

}
