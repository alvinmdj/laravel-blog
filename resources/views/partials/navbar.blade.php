<nav class="navbar navbar-expand-md navbar-dark">
  <div class="container">
    <a class="navbar-brand mb-0 pe-3 h1" href="/">
      <div>
        <img src="/img/logo/laravel.svg" alt="" width="50">
        Laravel Blog
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item pe-3">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}"><i class="bi bi-house"></i> Home</a>
        </li>
        <li class="nav-item pe-3">
          <a class="nav-link {{ Request::segment(1) === 'posts' ? 'active' : '' }}" href="{{ route('posts') }}"><i class="bi bi-signpost"></i> Posts</a>
        </li>
        <li class="nav-item pe-3">
          <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="{{ route('categories') }}"><i class="bi bi-tags"></i> Category</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('dashboard.index') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-in-left"></i> Log Out
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @else
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}"><i class="bi bi-card-heading"></i> Register</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>