@extends('layout.home-layout')
@section('content')



      <div class="show">
        <h1>Posts</h1>
        <a href="{{ route('post.create') }}"></a>

        <table border="1">
          <thead>
            <td>AUTHOR</td>
            <td>TITLE</td>
            <td>CONTENT</td>
          </thead>
          <tbody>
            @foreach ($posts as $post)

              <tr>
                <td><a href="{{ route('post.show', $post->id) }}">{{ $post ->author }}</a></td>
                <td>{{ $post ->title }}</td>
                <td>{{ $post ->content }}</td>
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
              @endforeach
            </tbody>
            </table>
            <a href="{{ route('post.create') }}">CREATE NEW POST</a>
        </div>




@stop
