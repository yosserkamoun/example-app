@extends('layouts.app')

@section('content')
    <h1>Modifier un Admin</h1>

    <form action="{{ route('admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{ $admin->name }}">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="{{ $admin->email }}">

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection
