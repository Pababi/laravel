<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPostRequest;
use App\Models\Post;

class NewPostController
{
    public function postForm(): void
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

}
