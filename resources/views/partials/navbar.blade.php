<nav class="navbar navbar-expand-sm navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand mb-0 h1" href="/">Laravel Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "All Post") ? 'active' : '' }}" href="{{ route('posts') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Categories") ? 'active' : '' }}" href="{{ route('categories') }}">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>