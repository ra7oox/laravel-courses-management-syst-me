@extends('master')
@section('content')

<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-uppercase">Liste des Formations</h2>
        @if (Auth::user()->type_account == "admin")
            <a href="{{ route('formations.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Ajouter une formation
            </a>
        @endif
    </div>

    <form action="{{ route('formations.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Rechercher une formation..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>

    <div class="row">
        @forelse ($formations as $formation)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 border-info">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-info fw-bold">{{ $formation->titre }}</h5>
                            <p class="card-text">Nombre d'heures : <strong>{{ $formation->NbreHeure }}</strong></p>
                        </div>

                        <div class="mt-3">
                            <a href="{{ route('formations.show', $formation->id) }}" class="btn btn-outline-info w-100 mb-2">
                                <i class="bi bi-chat-left-text"></i> Voir les avis
                            </a>

                            @if (Auth::user()->type_account == "admin")
                                <div class="d-flex gap-2">
                                    {{-- <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-warning w-50">
                                        <i class="bi bi-pencil-square"></i> Modifier
                                    </a> --}}
                                    <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" class="w-50">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Voulez-vous vraiment supprimer cette formation ?')">
                                            <i class="bi bi-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">Aucune formation trouvée.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
