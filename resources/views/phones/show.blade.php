@extends('layout')

@section('title', "Telefono {$phone->id}")

@section('content')
    <h1>Telefono #{{ $phone->id }}</h1>

    <p>Nombre del usuario: {{ $user->name }}</p>
    <p>Correo electrónico: {{ $user->email }}</p>

    <p>
        <a href="{{ route('phones.index') }}">Regresar al listado de usuarios</a>
    </p>
@endsection