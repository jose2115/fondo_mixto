<div class="modal fade" id="modalFormato" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" id="fondocontainer">
        <h4 id="centrartitle">Añadir Formato <i class="fas fa-user-plus"></i></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#E1E2E3">


        <div class="card card">
          <div class="card-header">
            <h3 class="card-title">Presentacion Proyecto</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /tabla -->
          <div class="card-body">

            <div class="form-row">

                <div class="col-md-6">
                <label for="">Fecha de Inicio</label>
                <input type="date" id="fecha_ini" name="fecha_ini" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="">Fecha Final</label>
                <input type="date" id="fecha_fin" name="fecha_fin"  class="form-control">
              </div>
              
              

              <div class="col-md-12">
                <div class="form-group">
                <label>Líneas</label>
                    <select name="id_linea[]" id="id_linea" class="form-control select2bs4 show-tick" style="width: 100%;" multiple>
                      <?php $__currentLoopData = $lineas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option  value="<?php echo e($linea->id); ?>"><?php echo e($linea->descripcion); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
              </div>

            </div>



          </div>
          <!-- /fin tabla-->          
        </div>

        
        



      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-success" onclick="validateFormato('<?php echo e(route('validate.formato')); ?>')">Completado <i class="fas fa-times-circle"></i></button>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /home/fomiclo27/public_html/resources/views/modals/add-formato.blade.php ENDPATH**/ ?>