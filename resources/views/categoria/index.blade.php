@extends('layouts.app')

@section('template_title')
    Categoria
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categoria') }}
                            </span>

                            <div class="float-right">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Crear Categoria
                                </button> 

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
                            <table class="table table-striped table-bordered" style="width:100%" id="categorias">

                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>                                        
										<th>Nombre</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ $categoria->id }}</td>
											<td>{{ $categoria->nombre }}</td>
                                            <td>
                                                <div class="btn-group">
                                                <a class="btn btn-sm btn-primary mr-2 " href="{{ route('categorias.show',$categoria->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                <a class="btn btn-sm btn-success mr-2" href="{{ route('categorias.edit',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                {{-- <button data-nombre="{{ $categoria->nombre }}" value="{{ $categoria->id }}" class="btn btn-sm btn-success editCategoria" ><i class="fa fa-fw fa-edit"></i>Editar</button> --}}
                                                <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
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
    
@include('categoria.modals')

@endsection

{{-- <script>
$(document).ready(function(){
$(".editCategoria").on("click",function(){
$("#nombreEdit").val($(this).data('nombre'));
$("#formEdit").attr('action', `/categorias/update/${$(this).val()}`);
$("#modalEdit").modal('show');  
})
})
</script> --}}
    



