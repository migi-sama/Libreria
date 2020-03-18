@extends('libro.layout')

@section('encabezado')
   <h2>Listado de libros</h2>
@endsection

@section('contenido')
<div class="col-12 d-flex justify-content-end">
  <a href="{{ route('libro.create') }}" class="btn btn-success mb-2">
     <i class="fa fa-book"></i>Agregar
   </a> 
   </div>
  <br>
   <div class="row">
        <div class="col-12 text-center">
         @if (count($libros) >= 1)
          <table class="table table-responsive-lg table-bordered table-hover table-striped" id="laravel_crud">
           <thead class="thead-dark">
              <tr>
                 <th>#</th>
                 <th>Título</th>
                 <th>Género</th>
                 <th>Autor</th>
                 <th>Edición</th>
                 <th>Editorial</th>
                 <th>Sinopsis</th>
                 <th colspan="2">Opciones</th>
              </tr>
           </thead>
           <tbody class="table-light">

              @foreach($libros ?? '' as $libro)
         
              <tr>
                 <td>{{ $libro->id }}</td>
                 <td>{{ $libro->titulo }}</td>
                 <td>{{ $libro->genero }}</td>
                 <td>{{ $libro->autor }}</td>
                 <td>{{ $libro->edicion }}</td>
                 <td>{{ $libro->editorial }}</td>
                 <td>{{ $libro->sinopsis }}</td>
                 <td>
                 
                 <a href="{{ route('libro.edit',$libro->id) }}" class="btn btn-primary">
                 <i class="fa fa-edit"></i>
                 Editar</a></td>
                 <td>
                 <form action="{{ route('libro.destroy', $libro->id) }}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger fa fa-trash-alt" type="submit" 
                  onclick="return confirm('¿Está seguro de eliminarlo?')">
                  Eliminar</button>
                </form>
                </td>
              </tr>

              @endforeach
           </tbody>
          </table>
          {!! $libros ?? ''->links() !!}
          @else
            <h2>No hay registros aún.</h2>
          @endif
       </div> 
   </div>

   
 @endsection
