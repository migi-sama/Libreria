@extends('libro.layout')

@section('titulo','Registro')

@section('encabezado')
   <h2>Registrar Libro</h2>
@endsection
 
@section('contenido')

<br>
 
<form action="{{ route('libro.store') }}" method="POST" name="add_libro">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Titulo</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Ingrese Titulo">
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Género</strong>
            <input type="text" name="genero" class="form-control" placeholder="Ingrese Género">
            <span class="text-danger">{{ $errors->first('genero') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Autor</strong>
            <i class="fa fa-user text-info"></i>
            <input type="text" name="autor" class="form-control" placeholder="Ingrese Autor">
            <span class="text-danger">{{ $errors->first('autor') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Edición</strong>
            <input type="text" name="edicion" class="form-control" placeholder="Ingrese Edición">
            <span class="text-danger">{{ $errors->first('edicion') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Editorial</strong>
            <input type="text" name="editorial" class="form-control" placeholder="Ingrese Editorial">
            <span class="text-danger">{{ $errors->first('editorial') }}</span>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Sinopsis</strong>
            <textarea class="form-control" col="4" name="sinopsis" placeholder="Ingrese Sinopsis"></textarea>
            <span class="text-danger">{{ $errors->first('sinopsis') }}</span>
        </div>
    </div>
    <div class="col-md-12 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mx-2">Guardar</button>
        <a href="{{ route('libro.index') }}" class="btn btn-danger">Cancelar</a> 
    </div>
</div>
 
</form>
@endsection
