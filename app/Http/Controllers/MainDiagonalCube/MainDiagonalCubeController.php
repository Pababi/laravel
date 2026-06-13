<?php

namespace App\Http\Controllers\MainDiagonalCube;

class MainDiagonalCubeController
{
    private function mainDiagonalCube(int $length): MainDiagonalCubeResult
    {
        $diagonal = $length * sqrt(3);
        return new MainDiagonalCubeResult($length, $diagonal);
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

    public function mainDiagonalCubeFormPost(MainDiagonalCubeRequest $request): void
    {
        $length = $request['length'];
        $diagonal = $this->mainDiagonalCube($length);
        echo 'Длина = ' . $diagonal->length . '<br>';
        echo 'Главная диагональ куба = ' . $diagonal->diagonal . '<br>';
    }

}
