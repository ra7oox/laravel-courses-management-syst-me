@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-uppercase mb-4">Ajouter une nouvelle classe</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('classes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé de la classe</label>
            <input type="text" name="libelle" id="libelle" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="id_formation" class="form-label">Formation</label>
            <select name="id_formation" id="id_formation" class="form-select" >
                <option value="">-- Sélectionner une formation --</option>
                @foreach ($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->titre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nombre_max" class="form-label">Nombre maximum d'étudiants</label>
            <input type="number" name="nombre_max" id="nombre_max" class="form-control"  min="1">
        </div>

        <button type="submit" class="btn btn-primary w-100">Créer la classe</button>
    </form>
</div>
@endsection
