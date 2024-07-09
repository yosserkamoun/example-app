<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('check.admin')->except('index');
    }
    public function __construct()
    {
        $this->middleware('auth.admin')->except('index');
    }
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
        ]);

        // Créer un nouvel admin
        $admin = Admin::create($validatedData);

        // Redirection avec un message flash
        return redirect()->route('admins.index')
                         ->with('success', 'Admin créé avec succès');
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,'.$id,
            'password' => 'sometimes|string|min:8',
        ]);

        // Mettre à jour l'admin
        $admin = Admin::findOrFail($id);
        $admin->update($validatedData);

        // Redirection avec un message flash
        return redirect()->route('admins.index')
                         ->with('success', 'Admin mis à jour avec succès');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        // Redirection avec un message flash
        return redirect()->route('admins.index')
                         ->with('success', 'Admin supprimé avec succès');
    }
}
