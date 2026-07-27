<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    public static function createComment(string $name, string $email, string $topic, string $text): self
    {
        $comment = new self();
        $comment -> name = $name;
        $comment -> email = $email;
        $comment -> topic = $topic;
        $comment -> text = $text;
        return $comment;
    }
    public function updateComment(string $name, string $text, string $topic): void
    {
        $this->name = $name;
        $this->text = $text;
        $this->topic = $topic;
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

}
