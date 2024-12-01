<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliothequeController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/livres', [BibliothequeController::class, 'livres'])->name('livres');
Route::get('/livres-disponibles', [BibliothequeController::class, 'livresDisponibles'])->name('livres-disponibles');
Route::get('/emprunteurs-en-retard', [BibliothequeController::class, 'emprunteursEnRetard'])->name('emprunteurs-en-retard');
