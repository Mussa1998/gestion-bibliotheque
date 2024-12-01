<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Emprunteur;
use Illuminate\Http\Request;

class BibliothequeController extends Controller
{
    public function livres()
    {
        $livres = Livre::with('auteur')->get();
        return view('livres.index', compact('livres'));
    }

    public function livresDisponibles()
    {
        $livresDisponibles = Livre::where('is_available', true)->with('auteur')->get();
        return view('livres.disponibles', compact('livresDisponibles'));
    }

    public function emprunteursEnRetard()
    {
        $emprunteurs = Emprunteur::whereHas('livres', function ($query) {
            $query->whereNull('emprunteur_livre.date_retour');
        })->with('livres')->get();

        return view('emprunteurs.emprunteur-retard', compact('emprunteurs'));
    }
}
