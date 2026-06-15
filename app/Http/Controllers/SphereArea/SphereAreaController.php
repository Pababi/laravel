<?php

namespace App\Http\Controllers\SphereArea;

class SphereAreaController
{
    private function sphereArea( int $radius): SphereAreaResult
    {
        $sphereArea = 4 * pi() * $radius * $radius;
        return new SphereAreaResult($radius, $sphereArea);
    }

    public function sphereAreaForm(): void
    {
        $html = '<form action="/sphere" method="POST">
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

    public function sphereAreaFormPost(SphereAreaRequest $request):void
    {
        $radius = $request['radius'];
        $sphereArea = $this->sphereArea($radius);
        echo 'Радиус = '. $sphereArea->radius . '<br>';
        echo 'π= '. pi() . '<br>';
        echo 'Площадь сферы = ' . $sphereArea->sphereArea . '<br>';
    }

}
