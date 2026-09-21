<?php

namespace App\Http\Controllers\Post\ListPost;

use App\Models\Post;

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

        }

    }

}
