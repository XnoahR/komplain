<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
      <a class="navbar-brand" href="/">INIWEBS!TE</a>
      <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item ">
            <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "user")? 'active' : '' }}" href="/user">User</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Nameless</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 