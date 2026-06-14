<?php

namespace App\Http\Controllers\MiddleLineTrapezoid;

class MiddleLineTrapezoidController
{
    private function middleLineTrapezoid(int $lengthA, int $lengthB): MiddleLineTrapezoidResult
    {
        $middleLength = ($lengthA + $lengthB) / 2;
        return new MiddleLineTrapezoidResult($lengthA, $lengthB, $middleLength);
    }

    public function middleLineTrapezoidForm(): void
    {
        $html = '<form action="/pythagorean" method="POST">
     <input type="text" name="lengthA" placeholder="Длина А">
     <input type="text" name="lengthB" placeholder="Длина B">
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

    public function middleLineTrapezoidFormPost(MiddleLineTrapezoidRequst $request): void
    {
        $lengthA = $request['lengthA'];
        $lengthB = $request['lengthB'];
        $middleLength = $this->middleLineTrapezoid($lengthA, $lengthB);

        echo 'Длина A= ' . $middleLength->lengthA . '<br>';
        echo 'Длина B= ' . $middleLength->lengthB . '<br>';
        echo 'Длина средней линии ' . $middleLength->middleLength . '<br>';
    }
}
