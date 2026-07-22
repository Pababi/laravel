<?php

namespace App\Http\Controllers\Category\EditCategory;


use App\Models\Categhory;
use App\Models\Category;

class EditCategoryController
{
    public function editCategoryForm(): void
    {
        $html = '<form method="POST" action="/editcategory">
        <input type="text" name="id" placeholder="id из базы данных">
        <input type="text" name="title" placeholder="Изменить название">
        <input type="text" name="topic" placeholder="Изменить тему">
        <input type="text" name="description" placeholder="Изменить описание">
        <input type="submit"><br>';
        echo $html;

        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span><br>';
            }
        }
    }

    public function editCategoryFormPost(EditCategoryRequest $request)
    {
        $category = Category::find($request['id']);
        $category-> updateCategoryTitle($request['title']);
        $category->updateCategoryTopicDescription($request['topic'], $request['description']);
        $category->save();
        echo '<span style="color:green">Пост успешно изменен</span>';
    }
}
