<?php

namespace App\Http\Controllers;

class PostController
{
    public function index():string
    {
        return "Это страница post контроллера";
    }

    public function show(string $id): string
    {
        return "Это страница просмотра поста ". $id;
    }

}
