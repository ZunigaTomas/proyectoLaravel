<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{

    /*
     * Por convencion el modelo va a apuntar a la tabla cuyo nombre sea la version plural de si mismo y con letra minuscula
     * por ejemplo 'Libro' va a apuntar a la tabla 'libros'
     * esto no siempre nos va a ser conveniente ya que para apuntar a una tabla llamada por ejemplo 'niveles' el modelo deberia
     * llamarse 'Nivele' lo cual mucho sentido no tiene
     * por eso en los casos que no queramos seguir la convencion del ORM podemos colocar aqui la siguiente linea
     *
     * protected $table = "nombre de la tabla";
     * */

    use HasFactory;

    protected $fillable = ['nombre','autor','portada','sinopsis','cantidad_paginas','generos','precio','stock'];
}
