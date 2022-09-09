@extends('vistas.plantilla')

@section('title', 'Autores')

@section('contenido')
    <h1>Buscas un autor</h1>
    <br>
    <ul>
        @foreach ($autors as $autor)
            <li>Nombre: {{ $autor->nombre }}</li>
            <li>Email: {{ $autor->email }}</li>
            <br>
        @endforeach
    </ul>



@endsection
