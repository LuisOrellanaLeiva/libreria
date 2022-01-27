<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibro;
use App\Models\Libro;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class LibroController
 * @package App\Http\Controllers
 */
class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libro.index', compact('libros'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro = new Libro();
        $categorias = Categoria::pluck('nombre','id');
        return view('libro.create', compact('libro','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibro $request)
    {
        // request()->validate(Libro::$rules);
        // dd($request->all());
        $libro = Libro::create($request->all());


        return redirect()->route('libros.index')
            ->with('success', 'Libro Creado Exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::find($id);

        return view('libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $categorias = Categoria::pluck('nombre','id');
        return view('libro.edit', compact('libro','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Libro $libro
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLibro $request, Libro $libro)
    {
        $libro->update($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro Actualizado Exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    
    public function destroy($id)
    {
        $libro = Libro::find($id)->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro Eliminado Exitosamente');
    }
}
