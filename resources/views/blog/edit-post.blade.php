@extends('layout.home-layout')

@section('content')

    <h1>EDIT Post</h1>
    <div class="edit">
        <form action="{{ route('UpdatePost', $post->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div>
              <label for="author">AUTHOR</label>
              <input type="text" name="author" value="{{ $post->author }}">
            </div>
            <div>
              <label for="title">Title</label>
              <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div>
              <label for="content">Content</label>
              <input type="text" name="content" value="{{ $post->content }}">
            </div>

            <div>
                @foreach ($post -> categories as $category)
                  <input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->category_name }}<br>
                @endforeach
            </div>
            <button type="submit" name="button">Update Post</button>
          </form>
        </div>
@stop
