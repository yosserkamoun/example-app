@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau Stagiaire</h1>

    <form action="{{ route('stagiaires.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Créer Stagiaire</button>
    </form>
@endsection
