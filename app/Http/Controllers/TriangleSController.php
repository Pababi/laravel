<?php

namespace App\Http\Controllers;

use App\Http\Requests\TriangleSRequest;

class TriangleSController
{
    private function triangleArea(int $height, int $length)
    {
        echo 'Высота = ' . $height . '<br>';
        echo 'Длина основания = ' . $length . '<br>';
        $area = 1 / 2 * $length * $height;
        echo 'Площадь треугольника = ' . $area;
    }

    public function triangleSForm()
    {
        $html= '<form method="POST" action="/triangle">
        <input type="text" name="length" placeholder="Длина основания a">
        <input type="text" name="height" placeholder="Высота h">
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
        $this->triangleArea($request['length'], $request['height']);
    }


}
