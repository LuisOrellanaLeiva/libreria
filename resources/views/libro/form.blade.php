{{-- <div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('categoria_id', $categorias,$libro->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Categoria']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Titulo de Libro') }}
            {{ Form::text('titulo', $libro->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Nombre de Autor') }}
            {{ Form::text('nombre_autor', $libro->nombre_autor, ['class' => 'form-control' . ($errors->has('nombre_autor') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre de autor']) }}
            {!! $errors->first('nombre_autor', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Numero de paginas') }}
            {{ Form::number('nombre', $libro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div> --}}
<div class="">
    <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="categoria_id">Categoria</label>
            <select name="categoria_id" class="form-control" id="validationTooltip01" required>
                <option selected>Seleccione una categoria...</option>
                @foreach ($categorias as $id => $nombre)
                    <option value="{{ $id}}">{{ $nombre }}</option>
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
            value="{{ old('titulo') }}">
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
            name="nombre_autor" value="{{ old('nombre_autor') }}">
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
            name="lugar_publicacion" value="{{ old('lugar_publicacion') }}">
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
            name="numero_paginas" value="{{ old('numero_paginas') }}"> 
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
            name="fecha_publicacion" value="{{ old('fecha_publicacion') }}">
                <div class="valid-tooltip">Ok Valido!</div>
                <div class="invalid-tooltip">Complete el campo.</div>
                @error('fecha_publicacion')
                <small>{{ $message }}</small>
                <br>
                @enderror  
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Agregar</button>
      </form>
</div>
