@extends('layouts.app')

@section('content')
    <h1>Modifier un Stage</h1>

    <form action="{{ route('stages.update', $stage->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="libelle">Libellé :</label>
        <input type="text" id="libelle" name="libelle" value="{{ $stage->libelle }}">

        <label for="description">Description :</label>
        <textarea id="description" name="description">{{ $stage->description }}</textarea>

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
