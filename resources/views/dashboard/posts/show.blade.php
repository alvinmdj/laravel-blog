@extends('dashboard.layouts.app')

@section('content')
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3">
          <h2>{{ $post->title }}</h2>
          <p class="mb-3">
            Written by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-success">{{ $post->author->name }}</a> - <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-success">{{ $post->category->name }}</a>
          </p>
        </div>
        <div class="d-block py-2 mb-3 border-bottom">
          <a href="/dashboard/posts" class="btn btn-primary btn-sm"><span data-feather=corner-down-left></span> Back</a>
          <a href="" class="btn btn-warning btn-sm"><span data-feather=edit></span> Edit</a>
          <a href="" class="btn btn-danger btn-sm"><span data-feather=trash></span> Delete</a>
        </div>
        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
      </div>
    </div>
  </div>
@endsection