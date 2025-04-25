@extends('master')

@section('content')
<form action="{{ route('formations.store') }}" method="POST" class="p-4 border rounded shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="titre" class="form-label">Titre de la formation</label>
        <input type="text" name="titre" id="titre" class="form-control" placeholder="Ex : Laravel pour débutants" required>
    </div>

    <div class="mb-3">
        <label for="NbreHeure" class="form-label">Nombre d’heures</label>
        <input type="number" name="NbreHeure" id="NbreHeure" class="form-control" placeholder="Ex : 40" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Créer la formation</button>
</form>
@endsection