<?php

namespace App\Http\Controllers\EditComment;

use App\Models\Comment;

class EditCommentController
{
    public function editCommentForm(): void
    {
        $html = '<form method="POST" action="/editcomment">
        <input type="text" name="id" placeholder="id из базы данных">
        <input type="text" name="name" placeholder="Изменить имя">
        <input type="text" name="topic" placeholder="Изменить тему">
        <input type="text" name="text" placeholder="Изменить комментарий">
        <input type="submit"><br>';
        echo $html;

        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span><br>';
            }
        }
    }

    public function editCommentFormPost(EditCommentRequest $request): void
    {
        $comment = comment::find($request['id']);
        $comment->updateName($request['name']);
        $comment->updateTopic($request['topic']);
        $comment->updateComment($request['text']);
        $comment->save();
        echo '<span style="color:green">Пост успешно изменен</span>';

    }

}
