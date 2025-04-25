<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

    {{-- Barre de navigation --}}
    <header>
        @include('layouts.nav')
    </header>

    {{-- Contenu principal --}}
    <main class="container-fluid mt-4">
        <div class="row">

            {{-- Sidebar facultatif (si besoin) --}}
            {{-- <aside class="col-md-2 bg-white shadow-sm">
                @include('layouts.sidebar')
            </aside> --}}
           
            {{-- Dashboard ou autre contenu général --}}
            <section class="col-12">
                @include('dashboard')
                
            </section>
           
            {{-- Contenu dynamique selon la page --}}
           {{-- @if(Auth::user()->type_account=="etudiant")
            <section class="col-12 mt-3">
                @yield('content')
            </section>
            @endif --}}
        </div>
    </main>

    {{-- Pied de page (optionnel) --}}
    <footer class="text-center py-3 mt-5 text-muted small">
        &copy; {{ date('Y') }} GFormations. Tous droits réservés.
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>