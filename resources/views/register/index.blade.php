@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-5">
    <main class="form-registration">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <img class="card-title mb-3" src="img/logo/laravel-2.svg" alt="Laravel" width="50">
          </div>
          <form action="/register" method="POST">
            @csrf
            <div class="form-floating">
              <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Name" required>
              <label for="name">Full name</label>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-bottom" placeholder="Confirm password" required>
              <label for="password_confirmation">Confirm password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
          </form>
          <small class="mt-2 d-block text-center">Already registered? <a href="{{ route('login') }}">Login now!</a></small>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection