
<?php $__env->startSection('titulo', "Actualización Anexos"); ?>
<?php $__env->startSection('extra-css'); ?>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Actualización Anexos</p>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">   

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus">
            </i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
      <form id="form" action="<?php echo e(route('anexos.update', $anexo->id)); ?>" method="POST" onkeypress="return disableEnterKey(event);" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>       
        <input type="hidden" name="solicitud_id" value="<?php echo e($anexo->solicitud_id); ?>">
        <input type="hidden" name="documento_id" value="<?php echo e($anexo->documento_id); ?>">
        <div id="datos">
          <table class="table table-condensed">   
              <tr>
                  <th><?php echo e($anexo->documento->tipo_documento); ?></th>
                </tr>         
               <tr>
                 <td><input type="file" class="form-control " name="archivo" id="archivo"></td>
               </tr>         

           <tr>
             <td>
               <button type="button" id="actualizar" class="btn btn-success" ><i class="fa fa-save"></i> GUARDAR</button>
             </td>
           </tr>
          </table>
        </div>
      </form>
       


    </div>
    <!-- /fin tabla-->
    <div class="card-footer">
      Listado de los Empleados.
    </div>
  </div>
</div>
<form id="form_hidden" style="display:none" action="<?php echo e(route('empleados.index')); ?>" method="GET"><input type="hidden" name="opcion" value="ok"></form>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>

<!-- DataTables -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!--data tables y js de documentos--->

<script src="<?php echo e(asset('js/anexos.js')); ?>"></script>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/anexos/edit.blade.php ENDPATH**/ ?>