<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function createCategory(string $title, string $topic,string $description): self
    {
        $category = new self;
        $category -> title = $title;
        $category -> topic = $topic;
        $category -> rating = 0;
        $category -> description = $description;
        return $category;
    }

    public function updateCategory(string $title, string $topic, string $description) : void
    {
        $this -> title = $title;
        $this -> topic = $topic;
        $this -> description = $description;
    }
}
