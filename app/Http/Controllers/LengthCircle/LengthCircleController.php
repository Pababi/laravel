<?php

namespace App\Http\Controllers\LengthCircle;

class LengthCircleController
{
    private function lengthCircle(int $radius): LengthCircleResult
    {
        $pi = 3.14;
        $lengthCircle = 2 * $pi * $radius;
        return new LengthCircleResult($pi, $lengthCircle);
    }

    public function lengthCircleForm(): void
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

    public function lengthCircleFormPost(LengthCircleRequest $request): void
    {
        $radius = $request['radius'];
        $lengthCircle = $this->lengthCircle($radius);

        echo "π= " . $lengthCircle->pi . '<br>';
        echo "R= " . $radius . '<br>';
        echo "Длина окружности = " . $lengthCircle->lengthCircle;
    }

}
