<?php

namespace App\Http\Controllers\Post\DeletePost;

use App\Models\Post;

class DeletePostController
{
    public function deletePostForm(): void
    {
        $html = '<form method="POST" action="/post_delete">
        <input type="text" name="id" size="25" placeholder="Ведите id поста для удаления">
        <input type="submit" value="Удалить"></form>';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any())
        {
            foreach ($errors->all() as $message)
            {
                echo '<span style="color: red">' . $message . '</span><br>';
            }
        }
    }

    public function deletePostFormPost(DeletePostRequest $request): void
    {
        $post = Post::find($request['id']);
        $post->delete();
        echo '<label style="color: green">Пост удален</label>';
    }

}
