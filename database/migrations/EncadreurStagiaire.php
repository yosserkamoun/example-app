<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncadreurStagiaire extends Model
{
    use HasFactory;
    protected $fillable = ['stagiaire_id', 'encadreur_id'];

}
