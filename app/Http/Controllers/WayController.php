<?php

namespace App\Http\Controllers;

class WayController
{
    private function way(int $speed, int $time): int
    {
        $way = $speed * $time;
        return $way;
    }

}
