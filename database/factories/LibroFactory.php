<?php

namespace Database\Factories;

use App\Models\Libro;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{


    protected $model = Libro::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //aca use php faker para generar registros falsos en la db
        return [
            'nombre'=> $this->faker->unique()->sentence(6,false),
            'autor'=> $this->faker->name(),
            'portada'=> $this->faker->imageUrl(),
            'sinopsis'=> $this->faker->paragraph(),
            'cantidad_paginas'=> $this->faker->randomNumber(4,true),
            'generos'=> $this->faker->randomElement(['politica','aventura','fantasia','ciencia']),
            'precio'=> $this->faker->randomNumber(4,true),
            'stock'=> $this->faker->randomNumber(2,false)
        ];
    }
}
