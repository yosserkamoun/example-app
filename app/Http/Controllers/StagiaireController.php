<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('stagiaires.index', compact('stagiaires'));
    }

    public function create()
    {
        return view('stagiaires.create');
    }

    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|unique:stagiaires,telephone',
            'mail' => 'required|email|unique:stagiaires,mail',
            'cv' => 'nullable|string',
        ]);

        // Créer un nouveau stagiaire
        $stagiaire = Stagiaire::create($validatedData);

        // Redirection avec un message flash
        return redirect()->route('stagiaires.index')
                         ->with('success', 'Stagiaire créé avec succès');
    }

    public function show($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaires.show', compact('stagiaire'));
    }

    public function edit($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaires.edit', compact('stagiaire'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|unique:stagiaires,telephone,'.$id,
            'mail' => 'required|email|unique:stagiaires,mail,'.$id,
            'cv' => 'nullable|string',
        ]);

        // Mettre à jour le stagiaire
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->update($validatedData);

        // Redirection avec un message flash
        return redirect()->route('stagiaires.index')
                         ->with('success', 'Stagiaire mis à jour avec succès');
    }

    public function destroy($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->delete();

        // Redirection avec un message flash
        return redirect()->route('stagiaires.index')
                         ->with('success', 'Stagiaire supprimé avec succès');
    }
}
