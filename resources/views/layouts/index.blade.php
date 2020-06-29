<!DOCTYPE html>
<html lang="en">
  
  <head>
      <title>CONFERENCIA- @yield('titulo')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  
    <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/datatables/dataTables.bootstrap4.css")}} rel="stylesheet">
    <link href={{asset("css/sb-admin.css")}} rel="stylesheet">

  </head>


  <body id="page-top" >
  @guest
  <head>
      <br>
      <br>
      <br>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <style>
          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .full-height {
              height: 60vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }

          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 20px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
              
          }

          .m-b-md {
              margin-bottom: 30px;
          }
      </style>
  </head>
  <body>
      <div class="flex-center position-ref full-height">
        <div class="content">
          <h1>Usted no tiene permisos para ejecutar esta acción.</h1>
          <h2>¿Cree que es un error?  Contacte al Administrador.</h2>
          <img src="{{ asset('images/upiicsa.png') }}" width="20%" height="20%">
        <br>
        <br>
              <div class="links">
                  <a href="/"><button>Regresar</button></a>
              </div>
          </div>
      </div>
  </body>
</html>
@else
<nav  class="navbar navbar-expand navbar bg static-top"  style="background: linear-gradient(to right, #2962a7 10%, #40b06f 100%)">

    <a class="navbar-brand mr-1" href="{{route('Principal.index')}}" style="color:white">CONFERENCIA</a>
    <img width="50" height="25" src={{asset("images/upiicsa.png")}}> 

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
              <i class="fas fa-user-circle fa-fw" style="color:white"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown" >
              <span class="dropdown-item" >{{Auth::user()->name}}</span>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div id="wrapper">
  <ul class="sidebar navbar-nav" style="background: linear-gradient(to bottom, #2962a7 0%, #40b06f 100%);">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('Principal.index')}}">
            <i class="fas fa-fw fas fa-industry"></i>
              <span>Principal</span>
          </a>
        </li>
        {{--VISTAS ADMINISTRADOR--}}
        @if(Auth::user()->rol_id ==1)
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
            <i class="fas fa-fw fas fa-warehouse"></i>
            <span>Proyectos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('Proyectos.create')}}">Crear Proyecto</a>
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="{{route('Proyectos.index')}}">Historial de Proyectos</a>
      </li> --}}
      @endif
      @if(Auth::user()->rol_id ==2)
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
            <i class="fas fa-fw fas fa-warehouse"></i>
            <span>Proyectos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('Proyectos.index')}}">Historial de Proyectos</a>
      </li> --}}
      <li class="nav-item active">
          <a class="nav-link" href="{{route('Cuestionario1.create')}}">
            <i class="fas fa-fw fas fa-warehouse"></i>
              <span>Cuestionario</span>
          </a>
        </li>
      @endif
      {{--VISTAS ADMINISTRADOR--}}
      @if(Auth::user()->rol_id ==1)
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
          <i class="fas fa-user-circle fa-fw"></i>
          <span>Usuarios</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="{{route('Usuarios.create')}}">Crear Usuario</a>
              <div class="dropdown-divider">
              </div>
              <a class="dropdown-item" href="{{route('Usuarios.index')}}">Historial de Usuarios</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
          <i class="far fa-edit"></i>
          <span>Cuestionarios</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="{{route('Cuestionario1.index')}}">Cuestionario 1</a>
              <div class="dropdown-divider">
              </div>
    </li>
    @endif
  </ul>
      <div id="content-wrapper"> 
        <div class="container-fluid">
          @yield('content')
    <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/datatables/dataTables.bootstrap4.css")}} rel="stylesheet">
    <link href={{asset("css/sb-admin.css")}} rel="stylesheet">
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
{{-- logout --}}
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para Salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Salir" para cerrar su Sesión.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html">Salir</a>
          </div>
        </div>
    </div>
{{-- /logout --}}
    <script src={{asset ("vendor/jquery/jquery.min.js")}}></script>
    <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>
    <script src={{asset("vendor/datatables/jquery.dataTables.js")}}></script>
    <script src={{asset("vendor/datatables/dataTables.bootstrap4.js")}}></script>
    <script src={{asset("js/sb-admin.min.js")}}></script>
    <script src={{asset("js/demo/datatables-demo.js")}}></script>
    @endguest
  </body>
</html>