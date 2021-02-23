<?php $__env->startSection('titulo', "Solicitudes de Asistente Administrativo"); ?>

<?php $__env->startSection('extra-css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">


<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Solicitudes de Asistente Administrativo</p>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">
            <!----Modals-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>

    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
        <?php echo $__env->make('ajax.table-solicitudes-asistenteadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  
  </div>
</div>

<?php echo $__env->make('modals.show-solicitud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.add-anexos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('modals.add-anexos2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 
<?php $__env->stopSection(); ?>






<?php $__env->startSection('extra-script'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!--Data tables y script de lineas-->
<script src="<?php echo e(asset('js/datatable.js')); ?>"></script>
<script src="<?php echo e(asset('js/asistente.js')); ?>"></script>
<script src="<?php echo e(asset('js/add-anexo.js')); ?>"></script>
<script src="<?php echo e(asset('js/movimientos.js')); ?>"></script>
<?php echo $__env->make('layouts.botones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/asistente/index.blade.php ENDPATH**/ ?>