<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    function getLast5post() {

      $posts = Post::orderByDesc('updated_at')->take(5)->get();
      return view('blog.index-post', compact('posts'));
    }
}
