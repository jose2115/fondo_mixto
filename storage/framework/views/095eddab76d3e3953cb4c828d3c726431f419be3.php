   <!----Modals create-->
   <div class="modal fade" id="modalCreate" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer">
          <h4 id="centrartitle">Crear Población <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
            <form id="form_create" action="<?php echo e(route('poblacion.store')); ?>" method="POST" onkeypress="return disableEnterKey(event);">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Clasificación:</label>
                        <select name="clasificacion_id" id="" class="form-control">
                            <option value="">--Escoger Clasificación</option>
                            <?php $__currentLoopData = $clasificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($clasificacion->id); ?>"><?php echo e($clasificacion->tipo_poblacion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Detalle:</label>
                       <input type="text" class="form-control" name="detalle" >
                    </div>

                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="guardar" type="button" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\parque\resources\views/modals/create-poblacion.blade.php ENDPATH**/ ?>