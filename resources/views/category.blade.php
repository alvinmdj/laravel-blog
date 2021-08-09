@extends('layouts.app')

@section('content')
  <h1 class="mb-5">Post Category : {{ $category }}</h1>

  @foreach ($posts as $post)
    <article>
      <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
      </h2>
      
      <p>Written by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>

      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection