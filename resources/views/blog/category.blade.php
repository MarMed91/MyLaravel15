@extends('layout.home-layout')
@section('content')



      <div class="show">
        <h1>Posts</h1>

        <table border="1">
          <thead>
            <td>TItle</td>
            <td>Category Name</td>
            <td>author</td>
          </thead>
          <tbody>
            @foreach ($category -> posts as $post)
              <tr>
                <td>{{ $post->title }}</td>
                <td>
                  @foreach ($post -> categories as $category)
                  <a href="{{ route('categoryName', $category->category_name) }}">
                    {{ $category->category_name }}<br>
                  </a>
                  @endforeach
                </td>
                <td>{{ $post->author}}</td>
              </tr>
              @endforeach
            </tbody>
          </div>
@stop
