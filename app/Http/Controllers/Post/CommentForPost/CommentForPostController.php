<?php

namespace App\Http\Controllers\Post\CommentForPost;

use App\Models\Comment;
use App\Models\Post;

class CommentForPostController
{
    public function commentForPostForm(): void
    {
        $html = '<form method="POST" action="/commentforpost">
        <input type="text" name="id" placeholder="id поста к которому нужно привязать">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="email" placeholder="Эл. почта">
        <input type="text" name="topic" placeholder="Тема">
        <input type="text" name="text" placeholder="Комментарий">
        <input type="submit">
        </form>';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $error) {
                echo '<span style="color:red;">' . $error . '</span><br>';
            }
        }
    }

    public function commentForPostFormPost(CommentForPostRequest $request): void
    {
        $comment = Comment::createComment($request['name'], $request['email'], $request['topic'], $request['text']);
        $post = Post::find($request['id']);
        $post->comments()->save($comment);
    }

}
