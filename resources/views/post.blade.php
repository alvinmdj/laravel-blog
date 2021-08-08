@extends('layouts.app')

@section('content')
  <article>
    <h2>{{ $post['title'] }}</h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
  </article>

  <a href="{{ route('posts') }}">Back to Post</a>
@endsection