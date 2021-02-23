   <!----edit create-->
   <div class="modal fade" id="modalEdit" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer">
          <h4 id="centrartitle">Editar Población <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
            <form id="form_edit" action="<?php echo e(route('poblacion.update', 'poblacion')); ?>" method="POST" onkeypress="return disableEnterKey(event);">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <input type="hidden" name="id_row" id="id_row">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Clasificación:</label>
                        <select name="clasificacion_id" id="clasificacion_id" class="form-control">
                            <option value="">--Escoger Clasificación</option>
                            <?php $__currentLoopData = $clasificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($clasificacion->id); ?>"><?php echo e($clasificacion->tipo_poblacion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Detalle:</label>
                       <input type="text" class="form-control" name="detalle" id="detalle">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="actualizar" type="button" class="btn btn-success">Actualizar <i class="fas fa-pencil-alt"></i></button>
        </div>
      </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\parque\resources\views/modals/edit-poblacion.blade.php ENDPATH**/ ?>