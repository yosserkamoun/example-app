<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaires extends Model
{
    use HasFactory;
    protected $fillable = ['prenom', 'nom', 'telephone', 'mail', 'cv'];

    public function encadreurs()
    {
        return $this->belongsToMany(Encadreur::class, 'encadreur_stagiaire');
    }

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }
}
