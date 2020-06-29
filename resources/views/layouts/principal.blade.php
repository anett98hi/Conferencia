@extends('layouts.index')
@section('titulo','CONFERENCIA')
@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="{{route('Principal.index')}}">CONFERENCIA</a>
            </li>
            <li class="breadcrumb-item active">Inicio</li>
          </ol>
          @if(session('status'))
          <div class="alert alert-success">
              {{session('status')}}
          </div>
          @endif

          
          

<!-- Area Chart Example-->


{{-- <div class="row">
  <div class="col-lg-8">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-bar"></i>
      Tiempo Real</div>
      <div class="card-body">
        <canvas id="myBarChart" width="100%" height="50"></canvas>
      </div>
      
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-pie"></i>
        Tiempo Planeado</div>
      <div class="card-body">
        <canvas id="myPieChart" width="100%" height="100"></canvas>
      </div>
  
    </div>
  </div>
  
</div> --}}


</div>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>





<!-- Demo scripts for this page-->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
        



























         <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span></span>
            </div>
          </div>
        </footer>
@endsection
          