@extends('layouts.app')

@section('content')
    <h1>Créer un nouvel Encadreur</h1>

    <form action="{{ route('encadreurs.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Créer Encadreur</button>
    </form>
@endsection
