<?php

namespace App\Http\Controllers\EinsteinFormula;

class EinsteinFormulaController
{
    private function einsteinFormula(int $weight): EinsteinFormulaResult
    {
        $speedLight = 299792458;
        $energy = $weight * $speedLight * $speedLight;
        return new EinsteinFormulaResult($speedLight, $energy);
    }
    public function einsteinFormulaForm(): void
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
    public function einsteinFormulaFormPost(EinsteinFormulaRequest $request): void
    {
        $weight = $request['weight'];
        $einsteinFormulaResult = $this->einsteinFormula($weight);

        echo 'Масса= '. $weight . '<br>';
        echo 'Скорость света= '. $einsteinFormulaResult->speedLight . '<br>';
        Echo 'Эквивалентность массы и энергии= '. $einsteinFormulaResult->energy . '<br>';
    }

}
