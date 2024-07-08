<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encadreur extends Model
{
    use HasFactory;
    protected $fillable = ['prenom', 'nom', 'telephone', 'mail' , 'post'];

    public function stagiaires()
    {
        return $this->belongsToMany(Stagiaire::class, 'encadreur_stagiaire');
    }

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }
}
