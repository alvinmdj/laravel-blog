<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container">
    <a class="navbar-brand mb-0 h1" href="/">
      <div class="">
        <img src="img/logo/laravel.svg" alt="" width="50">
        Laravel Blog
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="{{ route('home') }}"><i class="bi bi-house"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="{{ route('about') }}"><i class="bi bi-info-square"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "all-post") ? 'active' : '' }}" href="{{ route('posts') }}"><i class="bi bi-signpost"></i> Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="{{ route('categories') }}"><i class="bi bi-tags"></i> Category</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "register") ? 'active' : '' }}" href="{{ route('register') }}"><i class="bi bi-box-arrow-in-left"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>