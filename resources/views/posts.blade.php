{{-- @dd($posts[0]['title']) --}}

@extends('layouts.app')

@section('content')
  @foreach ($posts as $post)
    <article class="mb-5">
      <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
      </h2>
      <h5>Author: {{ $post->author }}</h5>
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection