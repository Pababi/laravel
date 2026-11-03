<?php

namespace App\Http\Controllers\Post\ListPost;

use App\Models\Post;
use Illuminate\Http\Request;

class ListPostController
{
    public function listPostPage(): void
    {
        echo '<h2>Список всех постов</h2>';
        foreach (Post::all() as $post)
        {
            echo '<br>';
            echo 'ID: ' . $post->id . '<br>';
            echo 'Title: ' . $post->title . '<br>';
            echo 'Description: ' . $post->description . '<br>';
            echo 'Рейтинг: '. $post->rating . '<br>';
            echo '<form method="POST" action="/list-post-delete">
<input type="hidden" name="id" value="' . $post->id . '">
<input type="submit" value="Удалить"></form>';

        }

    }
    public function deletePost(Request $request): void
    {
        $post = Post::find($request['id']);
        $post->delete();
        echo '<span style="color: green">Пост успешно удален</span>';
    }

}
