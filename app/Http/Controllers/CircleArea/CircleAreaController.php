<?php

namespace App\Http\Controllers\CircleArea;

use App\Http\Requests\CircleAreaRequest;
use Illuminate\Http\Request;

class CircleAreaController
{
    private function areaCircle(int $radius): AreaCircleResult
    {
        $pi = 3.14;
        $area = $pi * $radius * $radius;
        return new AreaCircleResult($pi, $area);
    }

    public function circleForm(): void
    {
        $html = '<form method="POST" action="/circle">
      <input type="text" name="radius" placeholder="Значение r">
        <input type="submit">
        </form>';
        echo $html;

        // Или так (более безопасно)
        $errors = session('errors', collect()); // Если ошибок нет - пустая коллекция

        // Теперь можно использовать $errors
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            } // или добавить в HTML
        }
    }

    public function circleFormPost(CircleAreaRequest $request): void
    {
        $data = $request->all();
        $radius = $request['radius'];
        $circleAreaResult = $this->areaCircle($radius);
        echo "π= " . $circleAreaResult->pi . '<br>';
        echo "R= " . $radius . '<br>';
        echo "Площадь круга = " . $circleAreaResult->area . '<br>';
    }
}
