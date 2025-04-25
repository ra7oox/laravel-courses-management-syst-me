<?php

namespace App\Providers;

use App\Models\Avis;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share([
            'formationsCount' => Formation::count(),
            'etudiantsCount' => Etudiant::count(),
            'avisCount' => Avis::count(),
            'classesCount' => Classe::count(),
        ]);
    }
}
