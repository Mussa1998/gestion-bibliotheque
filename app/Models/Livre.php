<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'auteur_id', 'is_available'];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }

    public function emprunteurs()
    {
        return $this->belongsToMany(Emprunteur::class, 'emprunteur_livre')
                    ->withPivot('date_emprunt', 'date_retour')
                    ->withTimestamps();
    }
}
