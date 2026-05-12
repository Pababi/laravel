<?php

namespace App\Http\Controllers;

use App\Http\Requests\WayRequest;

class WayController
{
    private function way(int $speed, int $time): int
    {
        $way = $speed * $time;
        return $way;
    }

    public function wayForm()
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

    public function wayFormPost(WayRequest $request)
    {
        $speed = $request['speed'];
        $time = $request['time'];
        $way = $this->way($time, $speed);

        echo 'Скорость = ' . $speed . '<br>';
        echo 'Длина основания = ' . $time . '<br>';
        echo 'Путь = ' . $way . '<br>';
    }

}
