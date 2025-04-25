@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase mb-4">Détails de l'avis</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title text-info">Note : <span class="text-warning">{{ $avis->points }}</span></h5>
            <p class="card-text"><strong>Évaluateur :</strong> {{ $etudiant->nom }} {{ $etudiant->prenom }}</p>
            <p class="card-text"><strong>Formation :</strong> {{ $formation->titre }}</p>
            <p class="card-text"><strong>Nombre d'heures :</strong> {{ $formation->NbreHeure }}</p>

            <a href="{{ route('formations.show', $formation->id) }}" class="btn btn-outline-info mt-3">
                Voir la formation
            </a>

            <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-outline-primary mt-3">
                Voir l'étudiant
            </a>
        </div>
    </div>
</div>
@endsection
