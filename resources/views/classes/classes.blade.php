@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase mb-4">Liste des classes</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    @if(Auth::user()->type_account=="admin")
    <div class="mb-4 text-end">
        <a href="{{ route('classes.create') }}" class="btn btn-success">Ajouter une classe</a>
    </div>
    @endif

    <div class="row">
        @foreach ($classes as $classe)
            <div class="col-md-6 mb-5">
                <div class="card border-info shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-info">Classe : {{ $classe->libelle }}</h4>
                        <p class="card-text"><strong>Nombre max d'étudiants :</strong> {{ $classe->nombre_max }}</p>
                        
                        <a href="{{ route('classes.show', $classe->id) }}" class="btn btn-outline-info mt-3 w-100">
                            Voir sa formation
                        </a>
                    </div>
                </div>

                @if($classe->etudiants->count())
                    <div class="mt-3">
                        <h5 class="text-secondary">Étudiants inscrits dans cette classe :</h5>
                        @foreach ($classe->etudiants as $etudiant)
                            <div class="card border-primary mt-3 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">{{ $etudiant->nom }} {{ $etudiant->prenom }}</h5>
                                    <p class="card-text"><strong>Adresse :</strong> {{ $etudiant->adress }}</p>
                                    <p class="card-text"><strong>Date de naissance :</strong> {{ $etudiant->date_naissance }}</p>
                                    
                                    <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-outline-primary w-100">
                                        Voir son profil
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="mt-3 text-muted">Aucun étudiant inscrit dans cette classe.</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
