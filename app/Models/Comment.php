<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    public function updateName(string $name): void
    {
        $this->name = $name . '-Изменено';
    }

    public function updateTopic(string $topic): void
    {
        $this->topic = $topic . '-Изменено';
    }

    public function updateComment (string $text): void
    {

        $this->text = $text . '-Изменено';
    }
}
