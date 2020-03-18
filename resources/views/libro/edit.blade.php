@extends('libro.layout')

@section('encabezado')
   <h2>Editar Libro</h2>
@endsection
 
@section('contenido')

 
<form action="{{ route('libro.update', $libro_info->id) }}" method="POST" name="update_libro">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">                   <!-- TÍTULO-->
    <div class="col-md-4">
        <div class="form-group">
            <strong>Título</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Ingrese Título" value="{{ $libro_info->titulo }}">
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>                          <!-- GÉNERO-->
    <div class="col-md-4">
        <div class="form-group">
            <strong>Género</strong>
            <input type="text" name="genero" class="form-control" placeholder="Ingrese Género" value="{{ $libro_info->genero }}">
            <span class="text-danger">{{ $errors->first('genero') }}</span>
        </div>
    </div>                          <!-- AUTOR-->
    <div class="col-md-4">
        <div class="form-group">
            <strong>Autor</strong>
            <i class="fa fa-user text-info"></i>
            <input type="text" name="autor" class="form-control" placeholder="Ingrese Autor" value="{{ $libro_info->autor }}">
            <span class="text-danger">{{ $errors->first('autor') }}</span>
        </div>
    </div>                          <!-- EDICIÓN-->
    <div class="col-md-4">
        <div class="form-group">
            <strong>Edición</strong>
            <input type="text" name="edicion" class="form-control" placeholder="Ingrese Edición" value="{{ $libro_info->edicion }}">
            <span class="text-danger">{{ $errors->first('edicion') }}</span>
        </div>
    </div>                          <!-- EDITORIAL-->
    <div class="col-md-4">
        <div class="form-group">
            <strong>Editorial</strong>
            <input type="text" name="editorial" class="form-control" placeholder="Ingrese Editorial" value="{{ $libro_info->editorial }}">
            <span class="text-danger">{{ $errors->first('editorial') }}</span>
        </div>
    </div>                          <!-- SINOPSIS-->
    <div class="col-md-4">
        <div class="form-group">
            <strong>Sinopsis</strong>
            <textarea class="form-control" col="4" name="sinopsis" placeholder="Ingrese Sinopsis" >{{ $libro_info->sinopsis }}</textarea>
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
