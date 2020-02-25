@extends('layout')

@section('title', 'Telefonos')

@section('content')
    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($phones as $phone)
            <li>
                {{ $user->name }}, ({{ $user->email }})
                <a href="{{ route('phones.show', ['id' => $phone->id]) }}">Ver detalles</a>
            </li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent
@endsection