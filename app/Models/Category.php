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

    public function updateCategoryTitle(string $title) : void
    {
        $this -> title = $title. ' -Изменено';
        $this -> rating = $this->rating +1;
    }

    public function updateCategoryTopicDescription(string $topic, string $description) : void
    {
        $this -> topic = $topic . ' -Изменено';
        $this -> description = $description . ' -Изменено';
    }
}
