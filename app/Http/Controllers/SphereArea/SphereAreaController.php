<?php

namespace App\Http\Controllers\SphereArea;

class SphereAreaController
{
    private function sphereArea( int $radius)
    {
        $sphereArea = 4 * pi() * $radius * $radius;
        return $sphereArea;
    }

    public function sphereAreaForm()
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

}
