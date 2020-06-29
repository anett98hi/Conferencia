@extends('layouts.index')
@section('titulo','Crear Proyecto')
@section('content')
@include('common.errors')

	<form class="" method="POST" action="{{route('Proyectos.store')}}" enctype="multipart/form-data">
			@csrf
            <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Datos del Proyecto</div>
            <div class="card-body">
            <label for="">Nombre del Proyecto</label>
                    <input type="text" name="name_pro"  class="form-control" required maxlength="50">
					<label for="">Monto Asignado</label>
                    <input type="number" step="any" name="monto"  class="form-control" required max="1000000" min="1" maxlength="7">
					<label for="">Fecha de Creación</label> 
                    <input type="text" name="fechai"  class="form-control"  value ="{{$fecha}}" readonly>
                    <label for="">Fecha de Entrega</label> 
                    <input type="date" name="fechaf"  class="form-control" min="2019-06-04" max="2020-06-04" required>
                    <label>Cantidad de recursos</label>
					<input type="text" name="recursos" class="form-control" maxlength="50" required maxlength="50">
                    {{-- <label for="">Plan de trabajo</label>
                    <input type="text" step="any" name="plan"  class="form-control"> --}}
                    <label for="">Semaforo</label>
                    <select name="semaforo" id=""class="form-control" required>
                        <option value="1">Verde</option>
                        <option value="2">Amarillo</option>
                        <option value="3">Rojo</option>
                        </select>
                        <label for="">Avance(En Porcentaje)</label>
                    <input type="number" step="any" name="avance"  class="form-control" min="0" max="100" required>
                    <label for="">Desviaciones</label>
                    <input type="text" step="any" name="desviaciones"  class="form-control" maxlength="50" required>
                    <label>Plan de Trabajo</label>
                    <input type="file" name="archivo_id" required>
                    <br>
            </div>
            </div>
                <br>
            <button type="submit" class="btn btn-success form-control" >Crear Proyecto</button>
        </form>
        <br>
        <br>
        


<script src={{asset("js/agregar_tela.js")}}></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src={{asset("js/precioTotalTelas.js")}}></script>

<script src={{asset("js/entradas_tipoTelas.js")}}></script>
<script src={{asset("js/limpiar_entrada_tela.js")}}></script>

<script src={{asset("js/propiedadesTelas.js")}}></script>

      
@endsection
    
