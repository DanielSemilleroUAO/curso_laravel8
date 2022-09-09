@extends('vistas.plantilla')

@section('title', 'Productos' . ' ' . $product)

@section('contenido')
    <h1>Tu producto selecciona es: <?php echo $product; ?> </h1>
@endsection
