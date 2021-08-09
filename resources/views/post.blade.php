@extends('layouts.app')

@section('content')
  <article>
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
  </article>

  <a href="{{ route('posts') }}">Back to Post</a>
@endsection