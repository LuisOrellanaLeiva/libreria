@extends('layouts.app')
@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Nueva Web de Libreria</h1>
          <h2>Encuentra las mejores peliculas de la actualidad en un instante!</h2>
          <a href="#contenido" class="btn-get-started scrollto">Comienza Ya!</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <br />
  <section id="contenido" class="section-edit">
      <div class="container-fluid">
          <div class="text-center">
              <div data-bs-spy="scroll" data-bs-target="#idNav" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                  <h2 id="scrollspyHeading1">Libreria</b></h2>
                  <p >
                      Recuerda que estas funcionalidades solo se pueden utilizar si te encuentras logeado
                  </p>
              </div>
              </div>
  
  
              <div class="container" id="cont">
                  <div class="card" >
                      <img src="img/libro.jpg" />
                      <h4 class="mt-2">Categorias</h4>
                      <p>Descubre las categorias registradas de cada libro</p>
                      <a href="{{ route('categorias.index') }}">Ver</a>
                  </div>
  
                  <div class="card">
                      <img src="img/categoria.png" />
                      <h4 class="mt-2">Libros</h4>
                      <p>
                          Descubre la informacion registrada de tus libros preferidos
                      </p>
                      <a href="{{ route('libros.index') }}">Ver</a>
                  </div>
        
  
          </div>
  </section>
  
@endsection
