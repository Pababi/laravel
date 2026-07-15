<?php

namespace App\Http\Controllers\NewComment;

use App\Models\Comment;

class NewCommentController
{
    public function newComment(): void
    {
        $html = '<form method="post" action="/comment">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="email" placeholder="Эл. почта">
        <input type="text" name="topic" placeholder="Тема">
        <input type="text" name="text" placeholder="Комментарий">
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
    public function postCommentForm(NewCommentRequest $request): void
    {
        $comment = Comment::createComment($request['name'], $request['email'], $request['topic'], $request['text']);
        $comment ->save();
        echo '<span style="color:green"> Пост успешно добавлен </span>';
    }
}
