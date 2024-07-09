@extends('layouts.app')

@section('content')
    <h1>Liste des Stagiaires</h1>
    <ul>
        @foreach ($stagiaires as $stagiaire)
            <li>
                <p>Nom : {{ $stagiaire->nom }}</p>
                <p>Prénom : {{ $stagiaire->prenom }}</p>
                <!-- Ajoutez d'autres détails selon vos besoins -->
                <a href="{{ route('stagiaires.edit', $stagiaire->id) }}">Modifier</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('stagiaires.create') }}">Ajouter un nouveau stagiaire</a>
@endsection
