  <!----Modals edit-->
  <div class="modal fade" id="modalIndicadores" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer">
          <h4 class="modal-title">Agregar Indicador <i class="fas fa-paper-plane"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"style="background:whitesmoke">
           <form action="<?php echo e(route('add.indicador')); ?>" method="POST" id="form_indicadores" >
             <?php echo csrf_field(); ?>
            <input type="hidden" name="solicitud_id" id="solicitud_id">
            <div class="form-group">
              <label for="">Indicador</label>
              <select name="indicador_id" id="indicador_id" class="form-control select2">
                <?php $__currentLoopData = $indicadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nombre_indicador); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>            
            <div class="form-group">
              <button type="buuton" id="agregar" class="btn btn-primary"> <i class="fa fa-save"></i> AGREGAR</button>
            </div>
           </form>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\parque\resources\views/modals/add-indicadores.blade.php ENDPATH**/ ?>