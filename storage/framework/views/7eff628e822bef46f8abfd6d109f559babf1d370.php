
<?php $__env->startSection('titulo', "Solicitud"); ?>

<?php $__env->startSection('extra-css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Detalles Generales de Solicitud</p>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">


  <?php if($solicitud->categoria->tipo_solicitud=='Proyecto'): ?>
<div class="card card">
    <div class="card-header">
       <h4>ACTIVIDADES</h4>
       <?php if(count($solicitud->clausuras)==0): ?>
       <button type="button" class="btn btn-success  show-details" data-toggle="modal" data-target="#modalActividades" data-id="<?php echo e($solicitud->proyecto->id); ?>"><i class="fas fa-paper-plane" ></i> AGREGAR ACTIVIDADES</button>
      <?php endif; ?>
       <div class="card-tools">
       
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
       
        
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">

        <div id="table-actividades">
            <?php echo $__env->make('ajax.table-actividades', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Presupuestos:
        </h3><br>
        <?php if(count($solicitud->clausuras)==0): ?>
        <button id="btn-presupuesto"  type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPresupuesto">Añadir Presupuesto <i class="fas fa-hand-holding-usd"></i></button>

        <?php endif; ?>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
            <?php echo $__env->make('ajax.table-presupuesto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
<?php endif; ?>

    
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Anexos:
            </h3><br>
            <?php if(count($solicitud->clausuras)==0): ?>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAnexos" data-id="<?php echo e($solicitud->id); ?>"><i class="fas fa-paper-plane"></i>AGREGAR ANEXOS</button>
            <?php endif; ?>
            

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
                <?php echo $__env->make('ajax.table-anexos-edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
      
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Clausura:
            </h3><br>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
                <?php echo $__env->make('ajax.table-clausura', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php if(count($solicitud->clausuras)==0): ?>
            <form id="form_clausura" action="<?php echo e(route('store.clausura')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="solicitud_id" value="<?php echo e($solicitud->id); ?>" id="solicitud_id_clausura">
              <div class="form-row">
                <label for="">Motivo</label>
                <textarea name="motivo" id="motivo" style="width: 100%;"></textarea>
              </div>
              <div class="form-group">
                <br>
                <button type="button" id="add-clausura" class="btn btn-success"> <i class="fas fa-save"></i> GUARDAR</button>
              </div>
            </form>
            <?php endif; ?>
      
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <?php echo $__env->make('modals.add-anexos-edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if($solicitud->categoria->tipo_solicitud=='Proyecto'): ?>
        <?php echo $__env->make('modals.actividades-edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('modals.presupuesto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php endif; ?>
    


      </div>

 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('extra-script'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!--Data tables y script de lineas-->
<script src="<?php echo e(asset('js/all-datatable.js')); ?>"></script>
<script src="<?php echo e(asset('js/all-solicitud.js')); ?>"></script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/admin/edit.blade.php ENDPATH**/ ?>