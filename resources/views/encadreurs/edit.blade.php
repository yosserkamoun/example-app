@extends('layouts.app')

@section('content')
    <h1>Modifier un Encadreur</h1>

    <form action="{{ route('encadreurs.update', $encadreur->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $encadreur->nom }}">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="{{ $encadreur->prenom }}">

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
