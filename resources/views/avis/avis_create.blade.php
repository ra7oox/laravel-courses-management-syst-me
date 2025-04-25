@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4 text-uppercase">Ajouter un Avis</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('avis.store') }}" method="POST" class="card p-4 shadow">
        @csrf
        
        <div class="mb-3">
            <label for="id_E" class="form-label">Étudiant</label>
            <select name="id_E" id="id_E" class="form-select" required>
                <option value="">-- Sélectionner un étudiant --</option>
                @foreach ($etudiants as $etudiant)
                    @if ($etudiant->nom==Auth::user()->name && $etudiant->prenom==Auth::user()->name  )
                    <option value="{{ $etudiant->id }}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                        
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_F" class="form-label">Formation</label>
            <select name="id_F" id="id_F" class="form-select" required>
                <option value="">-- Sélectionner une formation --</option>
                @foreach ($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->titre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="points" class="form-label">Points</label>
            <input type="number" class="form-control" id="points" name="points" required min="0" max="20">
        </div>

        <button type="submit" class="btn btn-primary w-100">Ajouter l'avis</button>
    </form>
</div>
@endsection
