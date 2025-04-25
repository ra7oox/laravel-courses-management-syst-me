@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center text-uppercase">Créer un étudiant</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" value="{{ old('nom') }}" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" value="{{ old('prenom') }}" required>
        </div>

        <div class="mb-3">
            <label for="adress" class="form-label">Adresse</label>
            <input type="text" name="adress" class="form-control" id="adress" value="{{ old('adress') }}" required>
        </div>

        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de naissance</label>
            <input type="date" name="date_naissance" class="form-control" id="date_naissance" value="{{ old('date_naissance') }}" required>
        </div>

        <div class="mb-3">
            <label for="id_class" class="form-label">Classe</label>
            <select name="id_class" id="id_class" class="form-select" required>
                <option value="">-- Choisir une classe --</option>
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
