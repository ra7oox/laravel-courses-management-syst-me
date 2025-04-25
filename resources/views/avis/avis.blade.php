@extends('master')

@section('content')
<div class="container mt-5">
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
    <h2 class="text-center text-uppercase mb-4">Liste des Avis</h2>
    @if(Auth::user()->type_account=="etudiant")
    <div class="text-end mt-4">
        <a href="{{ route('avis.create') }}" class="btn btn-success">
            Ajouter un avis
        </a>
    </div>
    @endif
    <div class="row">
        @foreach ($avis as $avi)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 border-info">
                    <div class="card-body">
                        <h5 class="card-title">Note : <span class="text-warning">{{ $avi->points }}</span></h5>
                        
                        <a href="{{ route('avis.show', $avi->id) }}" class="btn btn-outline-info mt-3 w-100">
                            Voir la formation et la classe associées
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
