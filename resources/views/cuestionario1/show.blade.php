@extends('layouts.index')
@section('titulo','Detalle del Proyecto')
@section('content')
@if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Detalles de Proyecto</div>
            <div class="card-body">
                <p><span style="font-weight:bold">Nombre del Proyecto: </span>{{$proyecto->name_pro}}</p>
                <p><span style="font-weight:bold">Monto Asignado: </span>{{$proyecto->monto}}</p>  
                <p><span style="font-weight:bold">Fecha de Creación: </span>{{$proyecto->fechai}}</p>  
                <p><span style="font-weight:bold">Fecha de Entregas: </span>{{$proyecto->fechaf}}</p>  
                <p><span style="font-weight:bold">Cantidad de recursos: </span>{{$proyecto->recursos}}</p> 
                <p><span style="font-weight:bold">Plan de trabajo: </span><a href="{{ asset('planes_trabajo/'.$proyecto->plan) }}" target="_blank">Plan de Trabajo</a></p>
                @if($proyecto->semaforo == 1)
                <p><span style="font-weight:bold">Semaforo: </span>Verde</p>
                @else
                @if($proyecto->semaforo == 2)
                <p><span style="font-weight:bold">Semaforo: </span>Amarillo</p>
                @else
                @if($proyecto->semaforo == 3)
                <p><span style="font-weight:bold">Semaforo: </span>Rojo</p>
                @else
                @endif
                @endif
                @endif
                {{-- <p><span style="font-weight:bold">Semaforo: </span>{{$proyecto->semaforo}}</p>  --}}
                <p><span style="font-weight:bold">Avance: </span>{{$proyecto->avance}}</p> 
                <p><span style="font-weight:bold">Desviaciones: </span>{{$proyecto->desviaciones}}</p>  
                <br>
                <div class="text-right">
                        <a href="/Proyectos/{{$proyecto->id}}/edit"><button type="button" class="btn btn-success">Editar</button></a>
                </div>
            </div>
</div>
<div class="d-flex">
        <a href="{{route('Proyectos.index')}}"><button class="btn btn-outline-primary">Regresar</button></a>
</div>
@endsection