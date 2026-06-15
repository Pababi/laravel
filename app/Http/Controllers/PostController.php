<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController
{
    public function index():string
    {
        $post = new Post();
$post->title = 'Заголовок 3';
$post->description = 'Описание';
$post->rating = 'Хороший';
$post->save();
        return "Это страница post контроллера";
    }

    public function show(string $id): string
    {
        $post = Post::find($id);
        $post->title = $post->title . 'Аппельсин.';
        $post->save();
        return "Это страница просмотра поста ". $post->title;
    }

}
