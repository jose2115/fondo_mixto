@extends('layouts.main')


@section('titulo', "Solicitudes")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
 <!--select-->
 <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/tooltip.css')}}">
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap4.min.css"/>

@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Consulta de Solicitudes</p>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card" style="background:#EBF5FB">

    <div id="resultado">

    </div>

    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
        @include('ajax.table-solicitudes-filtro')
    </div>
    <!-- /fin tabla-->
    <div class="card-footer ">
      Listado de los solicitudes.
    </div>
  </div>
</div>
@include('modals.show-solicitud')

@endsection


@section('extra-script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!---select-->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!--Data tables y script de lineas-->
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/management.js')}}"></script>
<script src="{{asset('js/movimientos.js')}}"></script>







</script>


@include('layouts.botones')
@stop


