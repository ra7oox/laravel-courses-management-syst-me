<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GFormations</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('formations.index') }}">Formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('avis.index') }}">Avis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('etudiants.index') }}">Étudiants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('classes.index') }}">Classes</a>
          </li>
        </ul>
  
        <ul class="navbar-nav">
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-outline-light">Déconnexion</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  