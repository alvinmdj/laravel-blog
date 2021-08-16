@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-5">
    <main class="form-signin">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <img class="card-title mb-3" src="img/logo/laravel-2.svg" alt="Laravel" width="50">
          </div>
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @elseif(session()->has('authError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('authError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
              <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autofocus required>
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
          </form>
          <small class="mt-2 d-block text-center">Don't have an account? <a href="{{ route('register') }}">Register now!</a></small>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection