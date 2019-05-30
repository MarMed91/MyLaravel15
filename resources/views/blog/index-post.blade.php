@extends('layout.home-layout')
@section('content')



      <div class="show">
        <a href="{{ route('newPost') }}">CREATE NEW POST</a>
        <h1>Posts</h1>

        <table border="1">
          <thead>
            <td>AUTHOR</td>
            <td>category</td>
            <td>title</td>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{ $post->author }}</td>
                <td>
                  @foreach ($post -> categories as $category)
                  <a href="{{ route('categoryName', $category->category_name) }}">
                    {{ $category->category_name }}<br>
                  </a>
                  @endforeach
                </td>
                <td>{{ $post->title }}</td>
              </tr>
              @endforeach
            </tbody>
          </div>
@stop
