<?php

namespace App\Http\Controllers;

use App\Http\Requests\TriangleSRequest;

class TriangleSController
{
    private function triangleS(int $h, int $a)
    {
        echo 'Высота = ' . $h . '<br>';
        echo 'Длина основания = ' . $a . '<br>';
        $s = 1 / 2 * $a * $h;
        echo 'Площадь треугольника = ' . $s;
    }

    public function triangleSForm()
    {
        $html= '<form method="POST" action="/triangle">
        <input type="text" name="a" placeholder="Длина основания a">
        <input type="text" name="h" placeholder="Высота h">
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
    public function triangleSFormPost(TriangleSRequest $request)
    {
        $this->triangleS($request['a'], $request['h']);
    }


}
