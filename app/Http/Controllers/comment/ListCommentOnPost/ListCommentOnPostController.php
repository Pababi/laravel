<?php

namespace App\Http\Controllers\comment\ListCommentOnPost;

use App\Models\Comment;

class ListCommentOnPostController
{
    public function listCommentOnPost(): void
    {
        echo '<h2>Список всех комментариев</h2>';

        foreach (Comment::all() as $comment)
        {
            echo '<br>';
            echo 'ID: ' . $comment->id . '<br>';
            echo 'Имя: ' . $comment->name . '<br>';
            echo 'Email: ' . $comment->email . '<br>';
            echo 'Тема: ' . $comment->topic . '<br>';
            echo 'Комментарий: '. $comment->text . '<br>';
            echo 'Id поста: ' . $comment->post->id . '<br>';
            echo 'Заголовок поста: ' . $comment->post->title . '<br>';

        }


    }

}
