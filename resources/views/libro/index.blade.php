@extends('layouts.app')

@section('template_title')
    Libro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Libro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Libro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" style="width:100%" id="libros">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>
										<th>Categoria</th>
										<th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Nº de paginas</th>
                                        <th>Lugar de publicacion</th>
                                        <th>Fecha de publicacion</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ $libro->id }}</td>
											<td>
                                                {{  $libro->categoria->nombre  }}
                                            </td>
											<td>{{ $libro->titulo }}</td>
                                            <td>{{ $libro->nombre_autor }}</td>
                                            <td>{{ $libro->numero_paginas }}</td>
                                            <td>{{ $libro->lugar_publicacion }}</td>
                                            <td>{{ $libro->fecha_publicacion }}</td>
                                            <td>
                                                <div class="btn-group">
                                                <a class="btn btn-sm btn-primary mr-1 " href="{{ route('libros.show',$libro->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                <a class="btn btn-sm btn-success mr-1" href="{{ route('libros.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
@endsection

 