<?php

namespace App\Http\Controllers\WayFormula;

class WayController
{
    private function way(int $speed, int $time): WayResult
    {
        $way = $speed * $time;
        return new WayResult($time, $speed, $way);
    }

    public function wayForm(): void
    {
        $html = '<form action="/way" method="POST">
     <input type="text" name="speed" placeholder="Скорость">
     <input type="text" name="time" placeholder="Время">
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

    public function wayFormPost(WayRequest $request): void
    {
        $speed = $request['speed'];
        $time = $request['time'];
        $way = $this->way($time, $speed);

        echo 'Скорость = ' . $way->speed . '<br>';
        echo 'Время = ' . $way->time . '<br>';
        echo 'Путь = ' . $way->way . '<br>';
    }

}
