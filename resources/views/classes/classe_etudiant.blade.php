@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-3 text-center text-uppercase">Détail de l'étudiant</h2>
        </div>

        <div class="col-md-6 offset-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-primary">{{ $etudiant->nom }} {{ $etudiant->prenom }}</h4>
                    <p class="card-text"><strong>Adresse :</strong> {{ $etudiant->adress }}</p>
                    <p class="card-text"><strong>Date de naissance :</strong> {{ $etudiant->date_naissance }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="mb-3 text-center text-uppercase">Détail de la classe</h2>
        </div>

        <div class="col-md-6 offset-md-3">
            <div class="card border-info shadow-sm">
                <div class="card-body">
                    <p class="card-text"><strong>Libellé :</strong> {{ $classe->libelle }}</p>
                    <p class="card-text"><strong>Nombre max d'étudiants :</strong> {{ $classe->nombre_max }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
