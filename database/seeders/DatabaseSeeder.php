<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Categoria::factory(10)->create();
        Libro::factory(30)->create();

    
    }
}
