<?php $__env->startSection('titulo', "Solicitantes"); ?>

<?php $__env->startSection('extra-css'); ?>
<!-- DataTables -->

<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">

<!--select-->
<link rel="stylesheet" href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>

<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Módulo de Solicitantes</p>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
        <?php echo $__env->make('ajax.table-solicitantes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- /fin tabla-->

   <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table2">
        <?php echo $__env->make('ajax.table-solicitantes3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- /fin tabla-->
  

    
    <div class="card-footer">
      Listado de los solicitantes.
    </div>

    <!-- /tabla -->
   
  
  </div>
</div>


<div id="solicitante_juridico">
<form id="form_hidden" style="display:none" action="<?php echo e(route('solicitante.index')); ?>" method="GET"><input type="hidden" name="opcion" value="ok"></form>
</div>

<div id="solicitante_natural">
<form id="form_hidden2" style="display:none" action="<?php echo e(route('solicitante2.index')); ?>" method="GET"><input type="hidden" name="opcion" value="ok"></form>
</div>
<?php echo $__env->make('modals.create-solicitantes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- <?php echo $__env->make('modals.edit-solicitante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content2'); ?>
   <?php echo $__env->make('modals.create-solicitantes2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('extra-script'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!---select-->
<script src="<?php echo e(asset('plugins/select2/js/select2.full.min.js')); ?>"></script>




<!--Data tables y script de lineas-->
<script src="<?php echo e(asset('js/datatable.js')); ?>"></script>

<script src="<?php echo e(asset('js/solicitante.js')); ?>"></script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/solicitante/index.blade.php ENDPATH**/ ?>