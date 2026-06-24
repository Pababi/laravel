<?php

namespace App\Http\Controllers\EditPost;

use App\Models\Post;
use Illuminate\Http\Request;

class EditPostController
{
    public function editPostForm(): void
    {
        $html = '<form method="POST" action="/edit_post">
        <input type="text" name="id" placeholder="id из базы данных"><br>
        <input type="text" name="title" placeholder="Изменить заголовок"><br>
        <input type="text" name="description" placeholder="Изменить описание"><br>
        <input type="text" name="rating" placeholder="Изменить оценку"><br>
        <input type="submit"><br>';
        echo $html;
        foreach (Post::all() as $post) {
            echo 'id: ' . $post->id. '<br>';
            echo 'Заголовки: ' .$post->title . '<br>';
            echo 'Описания: ' .$post->description . '<br>';
            echo 'Рейтинги: ' .$post->rating . '<br>';
        }

        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span><br>';
            }
        }
    }

    public function editPostFormPost(EditPostRequest $request): void
    {
        $post = Post::find($request['id']);
        echo 'Заголовок(до):'. $post->title . '<br>';
        echo 'Описание(до):'. $post->description . '<br>';
        echo 'Рейтинг(до):'. $post->rating . '<br>';
        $post->title = $request['title'];
        $post->description = $request['description'];
        $post->rating = $request['rating'];
        $post->save();
        echo '<span style="color:green">Пост успешно изменен</span>';

    }
}
