<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController
{
    public function showHome()
    {
        $html = '<form method="post" action="/skills">
<input type="text" value="Create Post" name="title">
<input type="text" value="Описание" name="description">
<button>Отправить</button>
</form>';
        return $html;
    }
    public function showSkills(int $id) {
        return 'Текущий id='. $id;
    }
    public function createPost(Request $request) {
        dd($request->all());
    }
}
