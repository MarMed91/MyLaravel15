@extends('layout.home-layout')

@section('content')

    <h1>EDIT Post</h1>
    <div class="edit">
        <form action="{{ route('post.update', $post->id) }}" method="post">
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
              <label for="birth_year">BIRTH YEAR</label>
              <select class="birth_year" name="birth_year">
                @for ($i = 1920; $i<=2000; $i++)
                  <option value="{{$i}}" > @if ($i == $employee -> birth_year)
                      selected
                    @endif
                    {{$i}}></option>
                @endfor
              </select>
            </div>
            <div class="form-group">
                <label for="category_id"></label><br>
                <select  name="category_id">
                  @foreach ($categories as $category)
                    <option value={{ $category->id }}>{{ $category->category_name }} {{ $category->number_of_posts }}</option>
                  @endforeach
                </select>
            </div>
            <button type="submit" name="button">Update Post</button>
          </form>
        </div>
@stop
