<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect("/","/login");
Route::get('/dashboard', function () {
    return view('master');
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

require __DIR__.'/auth.php';
