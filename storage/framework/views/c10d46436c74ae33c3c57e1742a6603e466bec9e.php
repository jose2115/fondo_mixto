<?php $__env->startSection('titulo', "Solicitudes"); ?>

<?php $__env->startSection('extra-css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
 <!--select-->
 <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('css/tooltip.css')); ?>">
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap4.min.css"/>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>

<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Consulta de Solicitudes</p>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

  <div class="card card" style="background:#EBF5FB">

    <div class="card-header">
<form action="<?php echo e(route('solicitudes.buscar')); ?>" method="POST" id="form_buscar" class="form-inline">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="">Fecha Inicial: </label>
        <input type="date" name="date1" class="form-control" value="<?php echo date('Y-m-d');?>" required>
    </div>
    <div class="form-group">
        <label for="">Fecha Final: </label>

    <input type="date" name="date2" class="form-control" value="<?php echo date('Y-m-d');?>" required>

    </div>
    <button type="submit" class="btn btn-success">Buscar</button>
</form>
            <!----Modals-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div id="resultado">

    </div>
    <div class="card-footer ">
      Listado de los solicitudes.
    </div>
  </div>
</div>

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
<script>

    $(function() {
        $("#form_buscar").submit(function(event) {
            let form = $('#form_buscar');
            $.ajax({
                data: form.serialize(),
                url: form.attr('action'),
                type: form.attr('method'),
                dataType: 'html',
                success: function(data) {
                    $('#resultado').html(data);
                    $('#resultado').show();

                },
                error: function(data) {

                    if (data.status === 422) {
                        let errors = $.parseJSON(data.responseText);
                        addErrorMessage(errors);
                    }
                }
            });
            event.preventDefault();
        });
    })








</script>
<script src="<?php echo e(asset('js/movimientos.js')); ?>"></script>

<?php echo $__env->make('layouts.botones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fomiclo27/public_html/resources/views/solicitud/show.blade.php ENDPATH**/ ?>