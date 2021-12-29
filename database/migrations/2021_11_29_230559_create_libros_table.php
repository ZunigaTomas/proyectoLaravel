<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();

            $table->string('nombre')->unique();

            $table->string('autor');

            $table->string('portada');

            $table->text('sinopsis');

            $table->integer('cantidad_paginas');

            $table->string('generos');

            $table->double('precio');

            $table->integer('stock');

            $table->timestamps(); //created_at updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
