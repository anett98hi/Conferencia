@extends('layouts.index')
@section('titulo','Editar Conferencia')
@section('content')
@include('common.errors')
@if(Auth::user()->rol_id ==1)
	<form class="" method="POST" action="{{route('Usuarios.update', $us->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Editar Usuario</div>
            <div class="card-body">
            <label for="">Nombre</label>
            <input type="text" name="nnombre"  class="form-control" value="{{ $us->name }}">
                    
            <label for="">Apellido Paterno</label>
            <input type="text"  name="npaterno"  class="form-control" value={{ $us->paterno }}>
            
            <label for="">Apellido Materno</label> 
            <input type="text" name="nmaterno"  class="form-control"  value ="{{$us->materno}}" >
            
            <label for="">Edad</label> 
            <input type="number" name="nedad"  class="form-control" value={{ $us->edad }}>                  
                    
            <label for="">Tipo</label>
            <select name="ntipo" id=""class="form-control">
            <option value="1">Admin</option>
            <option value="2">Usuario</option>
            </select>
            </div>
            </div>
                <br>
            <button type="submit" class="btn btn-success form-control" >Editar Usuario</button>
        </form>
        <br>
        <br>

<script src={{asset("js/agregar_tela.js")}}></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src={{asset("js/precioTotalTelas.js")}}></script>

<script src={{asset("js/entradas_tipoTelas.js")}}></script>
<script src={{asset("js/limpiar_entrada_tela.js")}}></script>

<script src={{asset("js/propiedadesTelas.js")}}></script>

@endif      
@endsection
    