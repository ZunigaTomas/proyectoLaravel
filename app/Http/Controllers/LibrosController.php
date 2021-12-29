<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class LibrosController extends Controller
{
    public function index() {

        $libros = Libro::orderBy('id', 'desc')->paginate();

        return view('libros.libros', ['libros' => $libros]);
    }

    public function create() {
        return view('libros.crear-libro');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'autor'=> 'required',
            'portada'=> 'required',
            'sinopsis'=> 'required',
            'cantidad_paginas'=> 'required|numeric',
            'generos'=> 'required',
            'precio'=> 'required|numeric',
            'stock'=> 'required|numeric'
        ]);
        /*$libro = new Libro();

        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->portada = $request->portada;
        $libro->sinopsis = $request->sinopsis;
        $libro->cantidad_paginas = $request->cantidad_paginas;
        $libro->generos = $request->generos;
        $libro->precio = $request->precio;
        $libro->stock = $request->stock;

        $libro->save();
        */

        $libro = Libro::create($request->all());

        return redirect()->route('libros.show', $libro);
    }

    public function show(Libro $libro) {

        /*  Si el nombre de la variable que voy a enviar coincide con el nombre de la variable que llega por parametro podemos hacer esto:
            compact('libro'); lo cual nos retornaria ['libro' => $libro], prefiero dejarlo de la forma larga para tenerlo como referencia a futuro
        */


        return view('libros.detalles-libro', compact('libro'));
    }

    public function edit(Libro $libro) {    // declare una instancia de la clase libro para no tener que estar haciendo new Libro abajo, es simplemente para acortar el codigo
        return view('libros.editar', compact('libro'));
    }

    public function update(Libro $libro, Request $request) {
        $request->validate([
            'nombre' => 'required',
            'autor'=> 'required',
            'portada'=> 'required',
            'sinopsis'=> 'required',
            'cantidad_paginas'=> 'required|numeric',
            'generos'=> 'required',
            'precio'=> 'required|numeric',
            'stock'=> 'required|numeric'
        ]);

        /*
        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->portada = $request->portada;
        $libro->sinopsis = $request->sinopsis;
        $libro->cantidad_paginas = $request->cantidad_paginas;
        $libro->generos = $request->generos;
        $libro->precio = $request->precio;
        $libro->stock = $request->stock;

        $libro->save();


        */

        $libro->update($request->all());
        return redirect()->route('libros.show', $libro->id);
    }

    public function destroy(Libro $libro) {
        $libro->delete();

        return redirect(route('libros.index'));
    }


















}
