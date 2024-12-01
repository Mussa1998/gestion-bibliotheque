<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emprunteur extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function livres()
    {
        return $this->belongsToMany(Livre::class, 'emprunteur_livre')
                    ->withPivot('date_emprunt', 'date_retour')
                    ->withTimestamps();
    }
}
