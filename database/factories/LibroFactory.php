<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LibroFactory extends Factory
{
    
    /**
     * Define the model's default state.
     * 
     *
     */
    protected $model = Libro::class;

     /**
     * @return array
     */
     
    public function definition()
    {
        return [
            'categoria_id'=> Categoria::all()->random()->id,
            'titulo' =>$this->faker->name(),
            'nombre_autor'=>$this->faker->name(),
            'lugar_publicacion'=>$this->faker->country(),
            'numero_paginas'=>$this->faker->randomElement([200,350,400,500]),
            'fecha_publicacion'=>$this->faker->date(),



        ];
    }
}
