<div class="modal fade" id="modalEdit" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer">
          <h4 id="centrartitle">Actualizar Indicadores <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
          <form id="form_edit" action="<?php echo e(route('indicadores.update', 'indicador')); ?>" method="POST" onkeypress="return disableEnterKey(event);">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>

            <div class="form-row">

              <input type="hidden" name="id_row" id="id_row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <label for="">Nombre del Indicador:</label>
                <input type="text" name="nombre_indicador"  id="nombre_indicador" class="form-control">
              </div>

              <div class="col-lg-8 col-md-8 col-sm-12 col-xl-12">
                <label for="">Eje:</label>
                <select class="form-control" name="eje_id" id="eje_id">
                  <option value="">-- Escoger Opcion --</option>
                  <?php $__currentLoopData = $ejes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($eje->id); ?>"><?php echo e($eje->nombre_programa); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 col-xl-12">
                <label for="">Meta:</label>
                <input type="number" name="meta" id="meta" class="form-control">
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i
              class="fas fa-times-circle"></i></button>
          <button id="actualizar" type="button" class="btn btn-success">Actualizar <i class="fas fa-pencil-alt"></i></button>
        </div>
      </div>
    </div>
  </div>
<?php /**PATH /home/fomiclo27/public_html/resources/views/modals/edit-indicador.blade.php ENDPATH**/ ?>