<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProfileController;
use App\Models\Avis;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Formation;
use Database\Seeders\AvisSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect("/","/login");
Route::get('/dashboard', function () {

     return view('master', [
        'formationsCount' => Formation::count(),
        'etudiantsCount' => Etudiant::count(),
        'avisCount' => Avis::count(),
        'classesCount' => Classe::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource("etudiants",EtudiantController::class);
Route::resource("classes",ClasseController::class);
Route::resource("formations",FormationController::class);
Route::resource("avis",AvisController::class);
Route::get("/mes-avis",[AvisController::class,"mesAvis"])->name("mes-avis");
require __DIR__.'/auth.php';
