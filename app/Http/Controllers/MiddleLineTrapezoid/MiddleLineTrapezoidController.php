<?php

namespace App\Http\Controllers\MiddleLineTrapezoid;

class MiddleLineTrapezoidController
{
    private function middleLineTrapezoid(int $lengthA, int $lengthB)
    {
        $middleLength = ($lengthA + $lengthB) / 2;
        return $middleLength;
    }

    public function middleLineTrapezoidForm(): void
    {
        $html = '<form method="POST" action="/middle">
        <input type="text" name="lengthA" placeholder="Длина A">
        <input type="text" name="lengthB" placeholder="Длина B">
        <input type="submit">';
        echo $html;

        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            }
        }

    }
}
