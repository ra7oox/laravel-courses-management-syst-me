<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container-fluid">
      <a class="navbar-brand fw-bold text-info fs-4" href="#">
          <i class="bi bi-mortarboard-fill me-2"></i>GFormations
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav align-items-center">
              <li class="nav-item me-4">
                  <span class="navbar-text text-white fw-semibold">
                      <i class="bi bi-person-circle me-1"></i>
                      {{ Auth::user()->name }}
                      <span class="badge bg-secondary ms-2">{{ Auth::user()->type_account }}</span>
                  </span>
              </li>
              <li class="nav-item">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="btn btn-outline-light d-flex align-items-center">
                          <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                      </button>
                  </form>
              </li>
          </ul>
      </div>
  </div>
</nav>
