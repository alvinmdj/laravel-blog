@extends('layouts.app')

@section('content')
  <article>
    <h2>{{ $post->title }}</h2>

    <p>Written by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> - <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}
  </article>

  <a href="{{ route('posts') }}">Back to Post</a>
@endsection