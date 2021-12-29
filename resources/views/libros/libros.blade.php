@extends('plantillas.plantilla')

@section('titulo', 'Libros')

@section('contenido')

    <div class="container-fluid">
        <ul class="row">
        @foreach($libros as $l)
            <li class="col-4">
                <a href="{{route('libros.show', $l->id)}}">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{$l->portada}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$l->nombre}}</h5>
                                <p class="card-text">{{$l->autor}}</p>
                                <br>
                                <p class="card-text"><small class="text-muted">${{$l->precio}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </li>
        @endforeach
        </ul>
    <div class="d-flex justify-content-center">
        {{$libros->links()}}
    </div>
    </div>
@endsection
