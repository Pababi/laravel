<?php

namespace App\Http\Controllers;

class LengthCircleController
{
    private function lengthCircle(int $radius): float
    {
        $pi = 3.14;
        $lengthCircle = 2 * $pi * $radius;
        return $lengthCircle;
    }
    public function lengthCircleForm()
    {
        $html = '<form method="POST" action="/length_circle">
        <input type="text" name="radius" placeholder="Радиус">
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
