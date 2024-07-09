@extends('layouts.app')

@section('content')
    <h1>Liste des Stages</h1>
    <ul>
        @foreach ($stages as $stage)
            <li>
                <p>Libellé : {{ $stage->libelle }}</p>
                <p>Description : {{ $stage->description }}</p>
                <!-- Ajoutez d'autres détails selon vos besoins -->
                <a href="{{ route('stages.edit', $stage->id) }}">Modifier</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('stages.create') }}">Ajouter un nouveau stage</a>
@endsection
