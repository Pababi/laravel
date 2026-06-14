<?php

namespace App\Http\Controllers\TrapezoidArea;

class TrapezoidAreaController
{
    private function trapezoidArea(int $lengthA, int $lengthB, int $height): TrapezoidAreaResult
    {
        $trapezoidArea = ($lengthA + $lengthB)/2 * $height;
        return new TrapezoidAreaResult($lengthA, $lengthB, $height, $trapezoidArea);
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

    public function trapezoidAreaFormPost(TrapezoidAreaRequest $request): void
    {
        $lengthA = $request['lengthA'];
        $lengthB = $request['lengthB'];
        $height = $request['height'];
        $trapezoidArea = $this->trapezoidArea($lengthA, $lengthB, $height);
        echo 'Длина A= '. $trapezoidArea->lengthA . '<br>';
        echo 'Длина B= '. $trapezoidArea->lengthB . '<br>';
        echo 'Высота = '. $trapezoidArea->height . '<br>';
        echo 'Площадь трапеции = '. $trapezoidArea->trapezoidArea .'<br>';
    }

}
