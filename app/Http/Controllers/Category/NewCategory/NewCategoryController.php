<?php

namespace App\Http\Controllers\Category\NewCategory;

class NewCategoryController
{
    public function newCategoryForm()
    {
        $html = '<form method="post" action="/category">
        <input type="text" name="title" placeholder="Название">
        <input type="text" name="topic" placeholder="Тема">
        <input type="text" name="rating" placeholder="рейтинг">
        <input type="text" name="description" placeholder="Описание">
        <input type="submit">';

        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span><br>';
            }
        }
    }
}
