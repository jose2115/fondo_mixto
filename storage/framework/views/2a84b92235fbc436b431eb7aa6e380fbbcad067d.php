
<?php $__env->startSection('titulo', "Detalles de Anexos"); ?>
<?php $__env->startSection('extra-css'); ?>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Detalles de Anexos</p>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">
    <h3>Detalles de Anexos</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
     <table class="table">
        <tr>
            <th>Documento</th>
            <th>Archivo</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $anexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($anexo->tipo_documento); ?></td>
                <td>
                    
                    <a target="_blank" href="<?php echo e(asset('documentos/solicitudes/'.$anexo->idsolicitud.'/'.$anexo->name)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="<?php echo e(route('anexos.edit', $anexo->idanexo)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="2"><center>No Existen Anexos</center></td>
            </tr>
        <?php endif; ?>
     </table>

  </div>
    <!-- /fin tabla-->
    <div class="card-footer">
      Anexos
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra-script'); ?>
<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!--data tables y js de documentos--->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/anexos/show.blade.php ENDPATH**/ ?>