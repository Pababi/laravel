<?php

namespace App\Http\Controllers;

class TriangleSController
{
    private function TriangleS(int $h, int $a)
    {
        echo 'Высота = ' . $h . '<br>';
        echo 'Длина основания = ' . $a . '<br>';
        $s = 1 / 2 * $a * $h;
        echo 'Площадь треугольника = ' . $s;
    }

    public function TriangleSForm()
    {
        $html= '<form method="POST" action="/triangle">
        <input type="number" name="a" placeholder="Длина основания a">
        <input type="number" name="h" placeholder="Высота h">
        <input type="submit">
        </form>';

        echo $html;

        $errors = session('errors', collect());

        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">'.$message .'</span>' . '<br>';
            }
        }
    }


}
