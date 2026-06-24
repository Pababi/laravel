<?php

namespace App\Http\Controllers\NewPost;

use App\Models\Post;

class NewPostController
{
    public function newPostForm(): void
    {
        $html = '<form method="POST" action="/new_post">
<input type="text" name="title" placeholder="Заголовок">
<input type="text" name="description" placeholder="Описание">
<input type="text" name="rating" placeholder="Рейтинг">
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
    public function newPostFromPost(NewPostRequest $request): void
    {
        $post = new Post();
        $post->title = $request['title'];
        $post->description = $request['description'];
        $post->rating = $request['rating'];
        $post->save();
        echo '<span style="color:green"> Пост успешно добавлен </span>';
    }
}
