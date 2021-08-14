@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration">
      <div class="card text-center">
        <div class="card-body">
          <img class="card-title mb-3" src="img/logo/laravel-2.svg" alt="Laravel" width="50">
          <form>
            <div class="form-floating">
              <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Name">
              <label for="name">Full name</label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
              <label for="password">Password</label>
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