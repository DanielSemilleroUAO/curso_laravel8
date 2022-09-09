@extends('vistas.plantilla')

@section('title', 'Login')

@section('contenido')
    <h1>Ingresa tus datos para continuar</h1>
    <div class="contenedor">
        <form action="{{ route('login.store') }}" method="post">
            @csrf
            <label for="">Nombre</label>
            @error('nombre')
                <small>{{ $message }}</small>
            @enderror
            <br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            <br><br>
            <label for="">Correo</label>
            @error('correo')
                <small>{{ $message }}</small>
            @enderror
            <br>
            <input type="email" name="correo" value="{{ old('correo') }}">
            <br><br>
            <label for="">Contraseña</label>
            <br>
            <input type="password" name="password" value="{{ old('password') }}">
            <br><br>
            <label for="">Comentario</label>
            <br>
            <textarea name="comentario" rows="10"></textarea>
            <br><br>
            <button type="submit">Ingresar datos</button>
        </form>
    </div>
@endsection
