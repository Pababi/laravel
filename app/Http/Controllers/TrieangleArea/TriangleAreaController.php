<?php

namespace App\Http\Controllers\TrieangleArea;

use App\Http\Requests\TriangleAreaRequest;

class TriangleAreaController
{
    private function triangleArea(int $height, int $length): TriangleAreaResult
    {
        $area = 1 / 2 * $length * $height;
        return new TriangleAreaResult($area);
    }

    public function triangleAreaForm(): void
    {
        $html = '<form method="POST" action="/triangle">
        <input type="text" name="length" placeholder="Длина основания a">
        <input type="text" name="height" placeholder="Высота h">
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

    public function triangleAreaFormPost(TriangleAreaRequest $request): void
    {
        $height = $request['height'];
        $length = $request['length'];
        $area = $this->triangleArea($height, $length);

        echo 'Высота = ' . $height . '<br>';
        echo 'Длина основания = ' . $length . '<br>';
        echo 'Площадь треугольника = ' . $area->area;
        echo 'Площадь двух треугольников = '. $area->area*2;
    }


}
