@extends('layout')

@section('title', "Telefono {$phone->id}")

@section('content')
    <h1>Telefono #{{ $phone->id }}</h1>

    <p>Numero de telefono: {{ $phone->number }}</p>
    <p>Propietario: {{ $phone->owner }}</p>

@endsection