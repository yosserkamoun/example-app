@extends('layouts.app')

@section('content')
    <h1>Liste des Admins</h1>
    <ul>
        @foreach ($admins as $admin)
            <li>
                <p>Nom : {{ $admin->name }}</p>
                <p>Email : {{ $admin->email }}</p>
                <!-- Ajoutez d'autres détails selon vos besoins -->
                <a href="{{ route('admins.edit', $admin->id) }}">Modifier</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('admins.create') }}">Ajouter un nouvel admin</a>
@endsection
