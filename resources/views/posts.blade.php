@extends('layouts.app')

@section('content')
  {{-- Title --}}
  <h1 class="mb-3 text-center">{{ $title }}</h1>

  {{-- Search Form --}}
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Find something..." name="search" value="{{ request('search') }}">
          <button class="btn btn-theme" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    {{-- Latest Post --}}
    <div class="card mb-3">
      @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden;">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
        </div>
      @else
      <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif
      <div class="card-body text-center">
        <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p class="card-text">
          <small>
            Written by <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none text-theme">{{ $posts[0]->author->name }}</a> - <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-theme">{{ $posts[0]->category->name }}</a>
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <p class="card-text"><a href="/posts/{{ $posts[0]->slug }}" class="btn btn-theme btn-sm">Read more</a></p>
        <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
      </div>
    </div>

    {{-- Other Posts --}}
    <div class="row">
      @foreach ($posts->skip(1) as $post)
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card h-100">
            <div class="position-absolute p-1 rounded fw-bold category-tag"><small><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></small></div>
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else
              <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            <div class="card-body">
              <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
              <p class="card-text">
                <small>
                  Written by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-theme">{{ $post->author->name }}</a>
                </small>
              </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <p class="cartd-text"><a href="/posts/{{ $post->slug }}" class="btn btn-theme btn-sm">Read more</a></p>
              <p class="card-text"><small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
@endsection