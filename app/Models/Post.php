<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
//    public static function factoryCreate(array $request): self

    public static function factoryCreate(string $title, string $description): self
    {
        $post = new self();
        $post->title = $title;
        $post->description = $description;
        $post->rating = 0;
        return $post;
    }
    public function updatePost(string $title, string $description): void
    {
        $this->title = $title;
        $this->description = $description;
        $this->rating = $this->rating + 1;
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
