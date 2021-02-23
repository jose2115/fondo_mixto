<?php $__env->startSection('titulo', "Reporte de Proyectos"); ?>
<?php $__env->startSection('extra-css'); ?>
<!-- DataTables -->
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
<small>Porutectos por Línea:</small>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body table-responsive" id="id_table">
      <form action="<?php echo e(route('reporte.linea')); ?>" method="POST" target="_blank">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-12">
                <label for="">Líneas:</label>
                <select name="linea" id="linea" class="form-control" required>
                    <?php $__currentLoopData = $lineas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($linea->id); ?>"><?php echo e($linea->descripcion); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>          
            
            </div>
            <br>

        <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i> BUSCAR</button> 
      </form>   
    </div>
    <!-- /fin tabla-->
    
  </div>
  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">
      <small>Solicitudes Por Fecha:</small>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body table-responsive" id="id_table">
      <form action="<?php echo e(route('reporte.fechas')); ?>" method="POST" target="_blank">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-6">
                <label for="">Fecha Inicio :</label>
                <input type="date" name="fecha1" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Fecha Final:</label>
                <input type="date" name="fecha2" class="form-control">
            </div>           
            </div>
            <br>
        <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i> BUSCAR</button> 
      </form>   
    </div>
    <!-- /fin tabla-->
   
  </div>

  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">
      <small>Solicitudes rango de fecha e indicador:</small>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body table-responsive" id="id_table">
      <form action="<?php echo e(route('reporte.fechas-indicador')); ?>" method="POST" target="_blank">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-sm-6">
            <label for="">Indicador :</label>
            <select name="indicador_id" id="indicador_id" class="form-control">
              <?php $__currentLoopData = $indicadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($item->id); ?>"><?php echo e($item->nombre_indicador); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
            <div class="col-sm-6">
                <label for="">Fecha Inicio :</label>
                <input type="date" name="fecha1" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Fecha Final:</label>
                <input type="date" name="fecha2" class="form-control">
            </div>           
            </div>
            <br>
        <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i> BUSCAR</button> 
      </form>   
    </div>
    <!-- /fin tabla-->
   
  </div>

</div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
<!-- DataTables -->

<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!--data tables y js de documentos--->

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/reportes/reporteproyecto.blade.php ENDPATH**/ ?>