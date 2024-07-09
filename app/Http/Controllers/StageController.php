<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index()
    {
        $stages = Stage::all();
        return view('stages.index', compact('stages'));
    }

    public function create()
    {
        return view('stages.create');
    }

    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'libelle' => 'required|string|max:255',
            'description' => 'nullable|string',
            'visibilite' => 'required|boolean',
            'contexte' => 'required|string',
        ]);

        // Créer un nouveau stage
        $stage = Stage::create($validatedData);

        // Redirection avec un message flash
        return redirect()->route('stages.index')
                         ->with('success', 'Stage créé avec succès');
    }
}
