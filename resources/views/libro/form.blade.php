<div class="">
    <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="categoria_id">Categoria</label>
            <select aria-selected="{{ $libro->categoria_id }}" name="categoria_id" class="form-control" id="validationTooltip01" required>
                <option value="">Seleccione una categoria...</option>
                @foreach ($categorias as $id => $nombre)
                    <option value="{{ $id}}" {{ $id == $libro->categoria_id ? 'selected' : '' }} >{{ $nombre }}</option>
                @endforeach
            </select>
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('categoria_id')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
          <div class="col-md-4 mb-3">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="validationTooltip02" required
            value="{{ $libro->titulo }} ">
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('titulo')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
          <div class="col-md-4 mb-3">
            <label for="nombre_autor">Nombre de autor</label>
            <input type="text" class="form-control" id="validationTooltip03" required 
            name="nombre_autor" value="{{ $libro->nombre_autor }}">
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('nombre_autor')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="lugar_publicacion">Lugar de publicacion</label>
            <input type="text" class="form-control" id="validationTooltip04" required
            name="lugar_publicacion" value="{{ $libro->lugar_publicacion }}">
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('lugar_publicacion')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
          <div class="col-md-3 mb-3">
            <label for="numero_paginas">Numero de Paginas</label>
            <input type="number" class="form-control" id="validationTooltip05" placeholder="Nº" required
            name="numero_paginas" value="{{ $libro->numero_paginas }}"> 
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('numero_paginas')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
          <div class="col-md-3 mb-3">
            <label for="fecha_publicacion">Fecha de publicacion</label>
            <input type="date" class="form-control" id="validationTooltip06" required
            name="fecha_publicacion" value="{{ $libro->fecha_publicacion }}">
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('fecha_publicacion')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>

      </form>
</div>
