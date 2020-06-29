@extends('layouts.index')
@section('titulo','Historial Conferencias')
@section('content')
@if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
<div class="card mb-3">
  <div class="card-header">
    Historial de Conferencias
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Semaforo</th>
            <th scope="col">Nombre del Proyecto</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Fecha Entrega</th>
            <th scope="col">Avance</th>
            <th scope="col">Monto</th>
            <th scope="col">Cantidad de Recursos</th>
            <th scope="col">Desviaciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($proyecto as $pro)
    <tr>
        @if($pro->semaforo == 1)
        <td><a href="/Proyectos/{{$pro->id}}"><button type="button" class="btn btn-success">Verde</button></a></td>
        @else
        @if($pro->semaforo == 2)
        <td><a href="/Proyectos/{{$pro->id}}"><button type="button" class="btn btn-warning">Amarillo</button></a></td>
        @else
        @if($pro->semaforo == 3)
        <td><a href="/Proyectos/{{$pro->id}}"><button type="button" class="btn btn-danger">Rojo</button></a></td>
        @endif
        @endif
        @endif
      <td>{{$pro->name_pro}}</td>
      <td>{{$pro->fechai}}</td>
      <td>{{$pro->fechaf}}</td>
      <td>{{$pro->avance}}</td>
      <td>{{$pro->monto}}</td>
      <td>{{$pro->recursos}}</td>
      <td>{{$pro->desviaciones}}</td>
    </tr>
  @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
