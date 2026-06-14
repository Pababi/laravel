<?php

namespace App\Http\Controllers\TrapezoidArea;

class TrapezoidAreaController
{
    private function trapezoidArea(int $lengthA, int $lengthB, int $height)
    {
        $trapezoidArea = ($lengthA + $lengthB)/2 * $height;
        return $trapezoidArea;
    }

    public function trapezoidAreaForm(): void
    {
        $html = '<form action="/trapezoid" method="POST">
     <input type="text" name="lengthA" placeholder="Длина А">
     <input type="text" name="lengthB" placeholder="Длина B">
     <input type="text" name="height" placeholder="Высота">
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
