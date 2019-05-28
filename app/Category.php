<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [

      "category_name",
      "number_of_posts"
    ];
    function posts() {

      return $this->belongsToMany(Post::class);
    }
}
