@extends('layouts.index')
@section('titulo','Editar Proyecto')
@section('content')
@include('common.errors')
@if(Auth::user()->rol_id ==1)
	<form class="" method="POST" action="{{route('Proyectos.update', $proye->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Editar Proyecto</div>
            <div class="card-body">
            <label for="">Nombre del Proyecto</label>
                    <input type="text" name="name_pro"  class="form-control" value="{{ $proye->name_pro }}">
					<label for="">Monto Asignado</label>
                    <input type="number" step="any" name="monto"  class="form-control" value={{ $proye->monto }}>
					<label for="">Fecha de Creación</label> 
                    <input type="text" name="fechai"  class="form-control"  value ="{{$proye->created_at}}" readonly>
                    <label for="">Fecha de Entrega</label> 
                    <input type="date" name="fechaf"  class="form-control" value={{ $proye->fechaf }}>
                    <label>Cantidad de recursos</label>
                    <input type="text" name="recursos" class="form-control" value={{ $proye->fechai }}>
                    <br>
                    <label for="">Plan de trabajo</label>
                    <input type="file" step="any" name="archivo_id" >
                    <br>
                    <br>
                    <label for="">Semaforo</label>
                    <select name="semaforo" id=""class="form-control">
                        <option value="1">Verde</option>
                        <option value="2">Amarillo</option>
                        <option value="3">Rojo</option>
                        </select>
                        <label for="">Avance</label>
                    <input type="number" step="any" name="avance"  class="form-control" value={{ $proye->avance }}>
                    <label for="">Desviaciones</label>
                    <input type="text" step="any" name="desviaciones"  class="form-control" value={{ $proye->desviaciones }}>
                    <br>
            </div>
            </div>
                <br>
            <button type="submit" class="btn btn-success form-control" >Editar Proyecto</button>
        </form>
        <br>
        <br>
@endif
 @if(Auth::user()->rol_id ==2)
 <form class="" method="POST" action="{{route('Proyectos.update', $proye->id )}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
     Editar Proyecto</div>
    <div class="card-body">
    <label for="">Nombre del Proyecto</label>
            <input type="text" name="name_pro"  class="form-control" value="{{ $proye->name_pro }}" readonly>
            <label for="">Monto Asignado</label>
            <input type="number" step="any" name="monto"  class="form-control" value={{ $proye->monto }} readonly>
            <label for="">Fecha de Creación</label> 
            <input type="text" name="fechai"  class="form-control"  value ="{{$proye->created_at}}" readonly>
            <label for="">Fecha de Entrega</label> 
            <input type="date" name="fechaf"  class="form-control" value={{ $proye->fechaf }} readonly>
            <label>Cantidad de recursos</label>
            <input type="text" name="recursos" class="form-control" value={{ $proye->fechai }} readonly>
            <br>
            <label for="">Plan de trabajo</label>
            <input type="file" step="any" name="archivo_id" required>
            <br>
            <br>
            <label for="">Semaforo</label>
            <select name="semaforo" id=""class="form-control" disabled>
                <option value="1">Verde</option>
                <option value="2">Amarillo</option>
                <option value="3">Rojo</option>
                </select>
                <label for="">Avance</label>
            <input type="number" step="any" name="avance"  class="form-control" value={{ $proye->avance }} readonly>
            <label for="">Desviaciones</label>
            <input type="text" step="any" name="desviaciones"  class="form-control" value={{ $proye->desviaciones }} readonly>
            <br>
    </div>
    </div>
        <br>
    <button type="submit" class="btn btn-success form-control" >Editar Proyecto</button>
</form>
<br>
<br>
@endif

<script src={{asset("js/agregar_tela.js")}}></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src={{asset("js/precioTotalTelas.js")}}></script>

<script src={{asset("js/entradas_tipoTelas.js")}}></script>
<script src={{asset("js/limpiar_entrada_tela.js")}}></script>

<script src={{asset("js/propiedadesTelas.js")}}></script>

      
@endsection
    