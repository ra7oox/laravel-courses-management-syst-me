@if (Auth::user()->type_account=='admin')
    

<div class="d-flex" style="min-height: 100vh;">

    {{-- Sidebar --}}
    <nav class="bg-dark text-white p-3" style="width: 250px;">
        <h4 class="text-info text-center">GFormations</h4>
        <ul class="nav flex-column mt-4">
            <li class="nav-item mb-2">
                <a href="{{ route('formations.index') }}" class="nav-link text-white">
                    <i class="bi bi-journal-text me-2"></i> Formations
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('avis.index') }}" class="nav-link text-white">
                    <i class="bi bi-chat-left-text me-2"></i> Avis
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('etudiants.index') }}" class="nav-link text-white">
                    <i class="bi bi-people me-2"></i> Étudiants
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('classes.index') }}" class="nav-link text-white">
                    <i class="bi bi-diagram-3 me-2"></i> Classes
                </a>
            </li>
        </ul>
    </nav>

    {{-- Main Content --}}
    <div class="flex-grow-1 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dashboard</h2>
            {{-- <div>
                <span class="text-muted me-3"><i class="bi bi-person-circle"></i> {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-box-arrow-right"></i> Déconnexion</button>
                </form>
            </div> --}}
        </div>

        {{-- Stat Cards --}}
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-bg-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Formations</h5>
                        <p class="card-text fs-4">{{ $formationsCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-bg-success shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Étudiants</h5>
                        <p class="card-text fs-4">{{ $etudiantsCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-bg-warning shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Avis</h5>
                        <p class="card-text fs-4">{{ $avisCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-bg-info shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Classes</h5>
                        <p class="card-text fs-4">{{ $classesCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="col-12 mt-3">
            @yield('content')
        </section>

        {{-- Add more content here --}}
    </div>

</div>
@endif
@if (Auth::user()->type_account=="etudiant")
<div class="container">
    <h2 class="mb-4">Tableau de bord Étudiant</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Mes Formations</h5>
                    <p class="card-text">Accédez à vos formations en cours ou terminées.</p>
                    <a href="{{ route('formations.index') }}" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Donner un avis</h5>
                    <p class="card-text">Exprimez vos retours sur les formations suivies.</p>
                    <a href="{{ route('avis.index') }}" class="btn btn-primary">Donner un avis</a>
                </div>
            </div>
        </div>
    </div>
    <section class="col-12 mt-3">
        @yield('content')
    </section>

</div>
    
@endif