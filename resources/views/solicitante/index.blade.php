@extends('layouts.main')


@section('titulo', "Solicitantes")

@section('extra-css')
<!-- DataTables -->

<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

<!--select-->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Módulo de Solicitantes</p>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">
      <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#modalCreate">Crear Solicitantes <i class="fas fa-user-plus"></i></button>
      <button type="button"  class="btn btn-success" id="juridico" >Juridico <i class="fas "></i></button>
      <button type="button"  class="btn btn-success" id="natural" >Persona Natural <i class="fas "></i></button>
            <!----Modals-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
        @include('ajax.table-solicitantes')
    </div>
    <!-- /fin tabla-->

   <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table2">
        @include('ajax.table-solicitantes3')
    </div>
    <!-- /fin tabla-->
  

    
    <div class="card-footer">
      Listado de los solicitantes.
    </div>

    <!-- /tabla -->
   
  
  </div>
</div>


<div id="solicitante_juridico">
<form id="form_hidden" style="display:none" action="{{route('solicitante.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
</div>

<div id="solicitante_natural">
<form id="form_hidden2" style="display:none" action="{{route('solicitante2.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
</div>
@include('modals.create-solicitantes')

<!-- @include('modals.edit-solicitante') -->


@endsection

@section('content2')
   @include('modals.create-solicitantes2')
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

<script src="{{asset('js/solicitante.js')}}"></script>

@stop


