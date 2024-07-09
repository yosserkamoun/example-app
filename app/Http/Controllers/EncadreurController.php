<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncadreurController extends Controller
{
    public function index()
    {
        $encadreurs = Encadreur::all();
        return view('encadreurs.index', compact('encadreurs'));
    }

    public function create()
    {
        return view('encadreurs.create');
    }

    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|unique:encadreurs,telephone',
            'email' => 'required|email|unique:encadreurs,email',
            'post' => 'nullable|string',
        ]);

        // Créer un nouvel encadreur
        $encadreur = Encadreur::create($validatedData);

        // Redirection avec un message flash
        return redirect()->route('encadreurs.index')
                         ->with('success', 'Encadreur créé avec succès');
    }
}
