@extends('dashboard.layouts.app')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>

  <div>
    <form method="POST" action="/dashboard/posts" class="mb-5">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
        <div class="form-text">This field is auto-generated, but of course you can customize it :)</div>
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
          <option selected disabled>Open this select menu</option>
          @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
        @error('category_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', () => {
      fetch(`/dashboard/posts/checkSlug?title=${title.value}`)
        .then(res => res.json())
        .then(data => slug.value = data.slug)
    });

    // prevent trix editor file upload
    document.addEventListener('trix-file-accept', (e) => {
      e.preventDefault()
    });
  </script>
@endsection