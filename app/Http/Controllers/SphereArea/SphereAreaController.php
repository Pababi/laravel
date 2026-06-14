<?php

namespace App\Http\Controllers\SphereArea;

class SphereAreaController
{
    private function sphereArea( int $radius)
    {
        $sphereArea = 4 * pi() * $radius * $radius;
        return $sphereArea;
    }

}
