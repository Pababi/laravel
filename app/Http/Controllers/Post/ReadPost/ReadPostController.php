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
        $post = Post::find($request['id']);
        echo '<h3>Сам пост</h3>';
        echo 'id: ' . $post->id . '<br>';
        echo 'Заголовок(до):'. $post->title . '<br>';
        echo 'Описание(до):'. $post->description . '<br>';
        echo 'Рейтинг(до):'. $post->rating . '<br>';
        echo '<h4>Комментарии</h4>';
        $comments = Post::find($request['id'])->comments;

        foreach ($comments as $comment) {
            echo 'Имя: ' . $comment->name . '<br>';
            echo 'Email: '. $comment->email . '<br>';
            echo 'Тема: '. $comment->topic . '<br>';
            echo 'Комментарий: '. $comment->text . '<br>';

        }
    }

}
