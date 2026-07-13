<?php

namespace App\Http\Controllers\NewComment;

use App\Models\Comment;
use App\Models\Post;

class CommentController
{
    public function newComment(): void
    {
        $html = '<form method="post" action="/comment">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="email" placeholder="Эл. почта">
        <input type="text" name="topic" placeholder="тема">
        <input type="text" name="text" placeholder="Текст">
        <input type="submit">
        </form>';

    echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            }
        }
    }
}
