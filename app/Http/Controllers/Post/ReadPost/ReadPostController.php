<?php

namespace App\Http\Controllers\Post\ReadPost;

use App\Models\Comment;
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
        $posts = Post::find($request['id']);
        echo '<h3>Сам пост</h3>';
        echo 'id: ' . $posts->id . '<br>';
        echo 'Заголовок(до): ' . $posts->title . '<br>';
        echo 'Описание(до): ' . $posts->description . '<br>';
        echo 'Рейтинг(до): ' . $posts->rating . '<br>';
        echo '<h4>Комментарий к посту</h4>';
        foreach ($posts->comments as $comment) {
            echo 'Имя комментатора: ' . $comment->name . '<br>';
            echo 'Эл.почта: '. $comment->email . '<br>';
            echo 'Тема: ' . $comment->topic . '<br>';
            echo 'Комментарий:'. $comment->text . '<br>';
        }

    }

}
