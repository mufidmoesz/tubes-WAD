<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <!-- Left-aligned items -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="#">About</a>
        </li>
        <li>
          <form class="d-flex" role="search">
            <input class="form-control me-2 long-search-bar" type="search" placeholder="Search" aria-label="Search">
          </form>
        </li>
      </ul>
      
      <!-- Center-aligned search bar -->
      <ul class="navbar-nav mx-auto">
      </ul>
      
      
      
      <!-- Right-aligned items -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
