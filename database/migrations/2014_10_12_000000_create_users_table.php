<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();  //Crea una columna 'id' que es: Integer Unsigned AutoIncrement

            $table->string('name'); //Columna 'name' varchar, como segundo parametro podemos mandar una long. si es menor a 255
            //usando text en lugar de string tenemos mayor capacidad

            $table->string('email')->unique(); //lo que almacenemos en un campo con '->unique()' debe ser unico

            $table->timestamp('email_verified_at')->nullable(); //utilizamos este campo en caso de que habilitemos la verificacion de mail
            //es '->nullable()' porque siempre que incluyamos un campo que puede quedar vacio debemos aplicarlo

            $table->string('password');

            $table->rememberToken(); //crea una columna 'rememberToken' de tipo varchar pero de size 100
            // se va a almacenar cada vez que el usuario al iniciar sesion marque mantener la sesion iniciada

            $table->timestamps(); //crea 2 columnas 'created_at' y 'updated_at' de tipo timestamp
            // en created_at se almacena cada vez que creamos un nuevo registro y en updated cuando actualizamos un registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
