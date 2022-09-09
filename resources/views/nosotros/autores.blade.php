@extends('vistas.plantilla')

@section('title', 'Autores')

@section('contenido')
    <h1>Bienvenidos a autores</h1>
    <ul>
        @foreach ($autors as $autor)
            <li>{{ $autor->nombre . $autor->id }}</li>
        @endforeach
    </ul>

    {{ $autors->links() }}

@endsection
