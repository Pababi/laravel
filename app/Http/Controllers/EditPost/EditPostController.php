<?php

namespace App\Http\Controllers\EditPost;

use App\Models\Post;
use Illuminate\Http\Request;

class EditPostController
{
    public function editPostForm(): void
    {
        $html = '<form method="POST" action="/edit_post">
        <input type="text" name="id" placeholder="id из базы данных">
        <input type="text" name="title" placeholder="Изменить заголовок">
        <input type="text" name="description" placeholder="Изменить описание"
        <input type="text" name="rating" placeholder="Изменить оценку"';
        echo $html;

        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            }
        }
    }
}
