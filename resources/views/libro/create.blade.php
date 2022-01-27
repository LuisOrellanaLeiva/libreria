@extends('layouts.app')

@section('template_title')
    Create Libro
@endsection

@section('content')
<div class="container">
    <section>
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Crear Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('libro.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
