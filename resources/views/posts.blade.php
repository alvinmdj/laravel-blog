@extends('layouts.app')

@section('content')
  <h1 class="mb-5">{{ $title }}</h1>

  @if ($posts->count())
    <div class="card mb-3">
      <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      <div class="card-body text-center">
        <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p class="card-text">
          <small>
            Written by <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> - <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <p class="card-text"><a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary btn-sm">Read more</a></p>
        <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
      </div>
    </div>
  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  <div class="row">
    @foreach ($posts->skip(1) as $post)
      <div class="col-sm-6 col-md-4 mb-3">
        <div class="card h-100">
          <div class="position-absolute p-1 rounded fw-bold" style="background-color: rgba(0, 0, 0, 0.7)"><small><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></small></div>
          <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
          <div class="card-body">
            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
            <p class="card-text">
              <small>
                Written by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
              </small>
            </p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <p class="cartd-text"><a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm">Read more</a></p>
            <p class="card-text"><small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small></p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection