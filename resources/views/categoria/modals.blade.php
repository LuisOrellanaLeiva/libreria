    <!--  modal EDIT -->
  {{-- <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" id="formEdit">
                @csrf
                @method('PUT')
                <label for="nombreEdit">Nombre Categoria</label>
                <input type="text" name="nombre" id="nombreEdit" required>
                <button type="submit">Actualizar</button>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- MODAL CREATE -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Categoria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('categorias.store') }}" class="needs-validation" novalidate method="POST">
            @csrf
        <div class="modal-body">
            <div class="container">
                <div class="form-row">
                
                <label for="nombre">Nombre Categoria</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
                <div class="valid-tooltip">
                    Correcto!
                  </div>
                  <div class="invalid-tooltip">
                    Error.
                  </div>
                
                </div>
                {{-- <button class="btn btn-primary" type="submit">Agregar</button> --}}
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary" type="submit">Agregar</button>
        </div>
       </form> 
    </div>
    </div>
</div>

