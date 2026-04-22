<?php

namespace App\Http\Controllers;

class PostController
{
    public function index() {
        return "Это страница post контроллера";
    }

    public function show(string $id)
    {
        return "Это страница просмотра поста ". $id;
    }

}
