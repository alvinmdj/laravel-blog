@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h2 class="text-center">{{ $post->title }}</h2>

        <p class="mb-3 text-center">
          Written by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-success">{{ $post->author->name }}</a> - <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-success">{{ $post->category->name }}</a>
        </p>

        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

        <p class="text-center"><a href="{{ route('posts') }}" class="text-decoration-none text-success fw-bold">Back to All Post</a></p>
      </div>
    </div>
  </div>
@endsection