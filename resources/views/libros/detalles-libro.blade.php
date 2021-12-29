@extends('plantillas.plantilla')

@section('titulo', $libro->nombre)

<style>
    .container-fluid .row{
        margin: 2%;
    }
</style>

@section('contenido')
    <div class="container-fluid">
        <h1>Detalles {{$libro->nombre}}</h1>
        <div class="row g-3">

            <br>

            <div class="col-md-3">
            <img src="{{$libro->portada}}" width="350px" height="520px">
            </div>

            <div class="col-md-9">
                <p>Sinopsis: {{$libro->sinopsis}}</p>
            </div>

            <div class="col-md-3">
            <p>Generos: {{$libro->generos}}</p>
            </div>

            <div class="col-md-3">
            <p>Cantidad de paginas: {{$libro->cantidad_paginas}}</p>
            </div>

            <div class="col-md-3">
            <p>Precio: ${{$libro->precio}}</p>
            </div>

            <div class="col-md-3">
            <p>Stock: {{$libro->stock}}</p>
            </div>

            <form method="post" action="{{route('libros.destroy', $libro)}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-warning" onclick="return confirm('Estás seguro que deseas eliminar este libro?');">Eliminar libro</button>
                <a href="{{ route('libros.edit', $libro) }}" class="btn btn-outline-primary">Editar libro</a>
            </form>
        </div>
    </div>
@endsection
