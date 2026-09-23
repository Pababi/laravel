<?php

namespace App\Http\Controllers\Post\ReadPost;

class ReadPostController
{
    public function readPostForm(): void
    {
        $html= '<form method="POST" action="/read-post">
        <input type="text" placeholder="id из базы данных" name="id">
        <input type="submit">';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red">' . $message . '</span><br>';
            }
        }

    }

}
