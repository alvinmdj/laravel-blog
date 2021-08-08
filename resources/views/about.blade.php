@extends('layouts.app')

@section('content')
  <h1>About page</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="Assassin's Creed II" width="200" class="img-thumbnail rounded-circle">
@endsection