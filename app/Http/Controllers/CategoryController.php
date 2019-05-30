<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    function getPostByCategoryName($category_name) {

      $category = Category::where('category_name',  $category_name)->first();
      $posts = $category->posts;
      return view('blog.category', compact('category', 'posts'));
    }
}
