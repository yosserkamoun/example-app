@extends('layouts.app')

@section('content')
    <h1>Liste des Encadreurs</h1>
    <ul>
        @foreach ($encadreurs as $encadreur)
            <li>
                <p>Nom : {{ $encadreur->nom }}</p>
                <p>Prénom : {{ $encadreur->prenom }}</p>
                <!-- Ajoutez d'autres détails selon vos besoins -->
                <a href="{{ route('encadreurs.edit', $encadreur->id) }}">Modifier</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('encadreurs.create') }}">Ajouter un nouvel encadreur</a>
@endsection
