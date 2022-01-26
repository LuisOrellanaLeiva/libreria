<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::resource('libros', LibroController::class)->middleware('auth');
// Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::middleware('auth')
->group(function(){
    Route::resources([
        'libros'=>LibroController::class,
        'categorias'=>CategoriaController::class
    ]);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
