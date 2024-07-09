@extends('layouts.app')

@section('content')
    <h1>Modifier un Stagiaire</h1>

    <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $stagiaire->nom }}">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="{{ $stagiaire->prenom }}">

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
