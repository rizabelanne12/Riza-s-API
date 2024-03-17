<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Story</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        @auth
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        @else
        <a class="nav-link" href="{{route('login')}}">Login</a>
        <a class="nav-link" href="{{route('registration')}}">Registration</a>
        @endauth
      </div>
    </div>
  </div>
</nav>