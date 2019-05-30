<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;

class NewPostController extends Controller
{
    function createNewPost() {

      $categories = Category::all();
      return view('blog.new-post', compact('categories')); //undefined richiede compact;
    }

    function saveNewPost(PostRequest $request) {

      $validatedData = $request->validated();

      $post = Post::create($validatedData);
      $categoriesId = $validatedData['categories'];

      $categories = Category::find($categoriesId);
      $post -> categories() -> attach($categories);

      return redirect('/');
    }
}
