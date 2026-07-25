<?php

namespace App\Http\Controllers\comment\EditComment;

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
        foreach (Comment::all() as $comment) {
            echo 'id: ' . $comment->id. '<br>';
            echo 'Имя: ' . $comment->name. '<br>';
            echo 'Тема: ' . $comment->topic. '<br>';
            echo 'text: ' . $comment->text. '<br>';
        }

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
        $comment->updateComment($request['name'], $request['text'], $request['topic']);
        $comment->save();
        echo '<span style="color:green">Пост успешно изменен</span>';

    }

}
