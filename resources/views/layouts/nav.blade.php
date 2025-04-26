<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container-fluid">
      <a class="navbar-brand fw-bold text-info fs-4 d-flex align-items-center" href="{{route("dashboard")}}">
          <i class="bi bi-mortarboard-fill me-2"></i> GFormations
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" id="userDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->email }}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                      <li><a class="dropdown-item" href="{{route("profile.edit")}}">Profil</a></li>
                      <li><a class="dropdown-item" href="{{route("mes-avis")}}">Liste de mes avis</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit" class="dropdown-item d-flex align-items-center text-danger">
                                  <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                              </button>
                          </form>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
</nav>
