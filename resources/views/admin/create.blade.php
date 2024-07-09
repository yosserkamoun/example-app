@extends('layouts.app')

@section('content')
    <h1>Créer un nouvel Admin</h1>

    <form action="{{ route('admins.store') }}" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email">

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit">Créer Admin</button>
    </form>
@endsection
