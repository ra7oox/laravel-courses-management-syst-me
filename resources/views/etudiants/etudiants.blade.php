@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase mb-4">Liste des étudiants</h2>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    <div class="row">
        @foreach ($etudiants as $etudiant)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $etudiant->nom }} {{ $etudiant->prenom }}</h5>
                        <p class="card-text"><strong>Adresse :</strong> {{ $etudiant->adress }}</p>
                        <p class="card-text"><strong>Date de naissance :</strong> {{ $etudiant->date_naissance }}</p>

                        <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-outline-primary mt-3 w-100">
                            Voir sa classe
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(Auth::user()->type_account=="admin")
    <div class="text-end mt-4">
        <a href="{{ route('etudiants.create') }}" class="btn btn-success">
            Ajouter un étudiant
        </a>
    </div>
    @endif
</div>
@endsection
