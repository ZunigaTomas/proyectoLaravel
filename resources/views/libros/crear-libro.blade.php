@extends('plantillas.plantilla')

@section('titulo', 'Crear un libro')

@section('contenido')

    <h1>Cargar libro</h1>
{{--    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}
    <div class="container-fluid">
    <form method="post" action="{{ route('libros.store') }}" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label class="form-label">Nombre del libro:</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="autor" value="{{old('autor')}}">
            @error('autor')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Sinopsis:</label>
                <textarea class="form-control" name="sinopsis" rows="5">{{old('sinopsis')}}</textarea>
            @error('sinopsis')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-8">
            <label class="form-label">Portada</label>
                <input type="text" class="form-control" name="portada" value="{{old('portada')}}">
            @error('portada')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-md-2">
            <label class="form-label">Cantidad de paginas:</label>
                <input type="number" class="form-control" name="cantidad_paginas" value="{{old('cantidad_paginas')}}">
            @error('cantidad_paginas')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-md-2">
            <label class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" value="{{old('precio')}}">
            @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-8">
            <label class="form-label">Generos</label>
                <input type="text" class="form-control" name="generos" value="{{old('generos')}}">
            @error('generos')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-4">
            <label class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" value="{{old('stock')}}">
            @error('stock')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agregar libro</button>
            <a href="{{ route('libros.index') }}" class="btn btn-outline-primary">volver a libros</a>
        </div>
    </form>
    </div>
@endsection

