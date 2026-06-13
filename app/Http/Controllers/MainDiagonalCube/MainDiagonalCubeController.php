<?php

namespace App\Http\Controllers\MainDiagonalCube;

class MainDiagonalCubeController
{
    private function mainDiagonalCube(int $length)
    {
        $diagonal = $length * sqrt(3);
        return $diagonal;
    }

    public function mainDiagonalCubeForm(): void
    {
        $html = '<form method="POST" action="/diagonal">
        <input type="text" name="length" placeholder="Длина стороны">
        <input type="submit">
        </form>';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $error) {
                echo '<span style="color:red;">' . $error . '</span>' . '<br>';
            }
        }
    }



}
