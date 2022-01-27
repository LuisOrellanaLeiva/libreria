@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $libro->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->nombre_autor }}
                        </div>
                        <div class="form-group">
                            <strong>Nº Paginas:</strong>
                            {{ $libro->numero_paginas }}
                        </div>
                        <div class="form-group">
                            <strong>Pais de Publicacion:</strong>
                            {{ $libro->lugar_publicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Pubblicacion:</strong>
                            {{ $libro->fecha_publicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
