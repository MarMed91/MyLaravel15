<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function getPostByCategoryName($category_name) {

      $category = Category::where('name', '=', $category_name);
      return view('blog.category', compact('category'));
    }
}
