<?php

namespace App\Http\Controllers\Post\ReadPost;

use App\Models\Comment;
use App\Models\Post;

class ReadPostController
{
    public function readPostForm(): void
    {
        $html = '<form method="POST" action="/read-post">
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
        $comment = Comment::find($request['id']);
        echo '<h3>Сам пост</h3>';
        echo 'id: ' . $post->id . '<br>';
        echo 'Заголовок(до): ' . $post->title . '<br>';
        echo 'Описание(до): ' . $post->description . '<br>';
        echo 'Рейтинг(до): ' . $post->rating . '<br>';
        echo '<h4>Комментарий к посту</h4>';
        echo 'Имя комментатора: ' . $comment->name . '<br>';
        echo 'Email: ' . $comment->email . '<br>';
        echo 'Тёма комментария: ' . $comment->topic . '<br>';
        echo 'Текст комментария: ' . $comment->text . '<br>';

    }

}
