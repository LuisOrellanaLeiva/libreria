<?php

namespace Tests\Unit;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;


class CategoriaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_categoria_has_many_libros()
    {
        $categoria = new Categoria();
        $this->assertInstanceOf(Collection::class,$categoria->libros);
    }
}
