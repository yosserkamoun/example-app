<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = ['stagiaire_id', 'encadreur_id', 'titre', 'description', 'contexte', 'visibilite'];

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class);
    }

    public function encadreur()
    {
        return $this->belongsTo(Encadreur::class);
    }
}
