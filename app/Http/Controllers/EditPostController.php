<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;

class EditPostController extends Controller
{
    function editPost($id) {

      $post = Post::findOrFail($id);
      return view('blog.edit-post', compact('post'));
    }

    function updatePost(PostRequest $request, $id) {

      $validatedData = $request->validated();

      $post = Post::whereId($id)->update($validatedData);
      return redirect('/');
    }
}
