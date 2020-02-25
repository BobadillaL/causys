@extends('layout')

@section('title', "Crear telefono")

@section('content')
    <h1>Crear telefono</h1>

    <form method="POST" action="{{ url('phones/create') }}">
        {{ csrf_field() }}

        <button type="submit">Crear telefono</button>
    </form>

    <p>
        <a href="{{ route('phones.index') }}">Regresar al listado de telefonos</a>
    </p>
@endsection