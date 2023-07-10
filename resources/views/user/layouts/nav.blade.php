<nav class="nav justify-content-center bg-dark ">
  <span class="navbar-brand mb-3 my-2 h1 mr-auto text-light mx-3">KomplainIN</span>
  <a class="nav-link text-light  my-2" aria-current="page" href="{{ route('home') }}">Home</a>
  
  @can('auth')
  <a class="nav-link text-light  my-2" href="{{ route('profile') }}">Profile</a>
  @endcan
  @can('admin')
  <a class="nav-link text-light  my-2" href="{{ route('data') }}">Data</a>
  @endcan
  @cannot('isLogin')
  <a class="nav-link text-light  my-2" href="{{ route('login_page') }}">Login</a>
  <a class="nav-link text-light  my-2" href="{{ route('register') }}">Register</a>
  @endcan
  @can('isLogin')
  <a class="nav-link text-light  my-2" href="{{ route('logout') }}">Logout</a>
  @endcan 
</nav>
