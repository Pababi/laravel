<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function createCategory(string $title, string $topic,int $rating, string $description): self
    {
        $category = new self;
        $category -> title = $title;
        $category -> topic = $topic;
        $category -> rating = $rating;
        $category -> description = $description;
        return $category;
    }
}
