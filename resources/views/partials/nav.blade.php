<nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container py-3">
      <a class="navbar-brand fw-bold" href="/">adrianrafli</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, <strong>{{ auth()->user()->name }}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse me-2"></i>Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-button">
            <a href="/login">
              <button type="button" class="btn"><i class="bi bi-box-arrow-in-right me-2"></i>Login</button>
            </a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
