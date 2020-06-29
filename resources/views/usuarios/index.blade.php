@extends('layouts.index')
@section('titulo','Historial Usuarios')
@section('content')
<div class="card mb-3">
  @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
  <div class="card-header">
    Historial de Usuarios
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Edad</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuario as $us)
    <tr>
    <td>{{$us->name}}</td>
    <td>{{$us->paterno}}</td>
      <td>{{$us->materno}}</td>
      <td>{{$us->edad}}</td>
      @if($us->rol_id == 1)
                    <td>Admin</td>
                    @else
                          @if($us->rol_id == 2)
                          <td>Usuario</td>
                                @endif
                                @endif
      <td>
        <a href="/Usuarios/{{$us->id}}/edit"><button type="button" class="btn btn-warning">Editar</button></a>
        <form action="{{route('Usuarios.destroy',$us->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Borrar</button>
        </form>
        
    </td>
    </tr>
  @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
