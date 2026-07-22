<?php

namespace App\Http\Controllers\Category\NewCategory;

use App\Models\Category;

class NewCategoryController
{
    public function newCategoryForm() : void
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

    public function newCategoryFormPost(NewCategoryRequest $request): void
    {
        $category = Category::createCategory($request['title'],$request['topic'], $request['rating'], $request['description']);
        $category -> save();
        echo '<span style="color:green"> Пост успешно добавлен </span>';
    }
}
