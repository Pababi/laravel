<?php

namespace App\Http\Controllers;

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

}
