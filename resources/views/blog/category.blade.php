@extends('layout-home-layout')
@section('content')
  <div class="cat">
    @foreach ($category->$post => $post)
      <h1>{{$post->title}}</h1>
    @endforeach
  </div>
@stop
