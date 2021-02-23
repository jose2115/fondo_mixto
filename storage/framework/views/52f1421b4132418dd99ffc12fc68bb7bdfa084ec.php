
<?php $__env->startSection('titulo', "Reporte de Proyectos"); ?>
<?php $__env->startSection('extra-css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Reporte de Proyectos</p>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  
  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">
<small></small>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body table-responsive" id="id_table">
      <form action="<?php echo e(route('reporte.filter')); ?>" method="POST" target="_blanck">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-6">
                <label for="">Fecha Inicio :</label>
                <input type="date" name="date1" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Fecha Final:</label>
                <input type="date" name="date2" class="form-control">
            </div>           
            </div>
            <br>
        <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i> BUSCAR</button> 
      </form>   
    </div>
    <!-- /fin tabla-->
   
  </div>
  



</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!--data tables y js de documentos--->
<script src="<?php echo e(asset('js/datatable.js')); ?>"></script>
<script src="<?php echo e(asset('js/reporte.js')); ?>"></script>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/reportes/proyecto.blade.php ENDPATH**/ ?>