@extends('layout.home-layout');
@section('content')

  <div class="show">
    <h1>Post</h1>
    <a href="{{ route('post.create') }}"></a>

    <table border="1">
      <thead>
        <td>AUTHOR</td>
        <td>TITLE</td>
        <td>CONTENT</td>
      </thead>
      <tbody>
          <tr>
            <td>{{ $post -> author }}</td>
            <td><a href="{{ route('post.show', $post->id) }}">{{ $post -> title }}</a></td>
            <td>{{ $post -> content }}</td>
            <td><a href="{{ route('post.edit', $post->id) }}"><i class="fa fa-edit"></i></a></td>
            <td>
              <form action="{{ route('post.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" name="button">
                  <i class="fa fa-trash-alt"></i>
                </button>
              </form>
            </td>
          </tr>
        </tbody>
        </table>
        <table border="1">
          <thead>
            <td><a href="{{ route('category', $category->category_name) }}">CATEGORY NAME</a></td>
            <td>NUMBER OF POSTS</td>
          </thead>

          @foreach ($post -> categories as $category)

            <tr>
              <td>{{ $category -> category_name }}</a></td>
              <td>{{ $category -> number_of_posts }}</td>
            </tr>
          @endforeach
        <a href="{{ route('post.create') }}">CREATE NEW COMPUTER</a>
    </div>
@stop
