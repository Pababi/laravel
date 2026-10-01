<?php

namespace App\Http\Controllers\Post\ReadPost;

use App\Models\Post;

class ReadPostController
{
    public function readPostForm(): void
    {
        $html= '<form method="POST" action="/read-post">
        <input type="text" placeholder="id из базы данных" name="id">
        <input type="submit"><br>';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red">' . $message . '</span> <br>';
            }
        }

    }

    public function readPostFormPost(ReadPostRequest $request): void
    {
        $post = Post::find($request['id']);
        echo 'id: ' . $post->id . '<br>';
        echo 'Заголовок(до):'. $post->title . '<br>';
        echo 'Описание(до):'. $post->description . '<br>';
        echo 'Рейтинг(до):'. $post->rating . '<br>';

    }

}
