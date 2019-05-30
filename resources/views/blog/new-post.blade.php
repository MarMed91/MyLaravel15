@extends('layout.home-layout')

@section('content')
  <h1>CREATE NEW POST</h1>
  <div class="edit">
      <form method="post" action="{{ route('saveNewPost') }}">
        @csrf
        @method('POST')
        <div>
          <label for="author">AUTHOR</label>
          <input type="text" name="author" value="">
        </div>
        <div>
          <label for="title">TITLE</label>
          <input type="text" name="title" value="">
        </div>
        <div>
          <label for="content">CONTENT</label>
          <input type="text" name="content" value="">
        </div>
        <div>
          @foreach ($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->category_name }}<br>
          @endforeach

        </div>
        <button type="submit" name="SAVE NEW CAR">SAVE NEW CAR</button>
      </form>
  </div>
@stop
