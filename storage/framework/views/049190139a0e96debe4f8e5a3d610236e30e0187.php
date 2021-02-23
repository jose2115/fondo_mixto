<div class="modal fade" id="modalCreate" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer">
          <h4 id="centrartitle">Añadir Solicitudes <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
            <?php echo csrf_field(); ?>
                <div class="form-row">

                    <div class="col-md-6">
                        <label for="">Categoria:</label>
                        <select name="categoria_id" id="categoria_id" class="form-control" onchange="changeSolicitud(this.value)">
                          <option value="" selected>-- Escoger Opcion --</option>
                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->tipo_solicitud); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Solicitante:</label>
                        <select name="solicitante_id" id="solicitante_id"  class="form-control select2" style="width: 100%;">
                          <option value="" selected>-- Escoger Opcion --</option>
                          <?php $__currentLoopData = $solicitantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($solicitante->id); ?>"><?php if($solicitante->razon_social): ?> <?php echo e($solicitante->razon_social); ?> (<?php echo e($solicitante->name_complete); ?>)</span> <?php else: ?> <?php echo e($solicitante->name_complete); ?><?php endif; ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <label for="" id="n_asunto">Asunto:</label>
                        <textarea name="descripcion_solicitud" id="descripcion_solicitud" class="form-control"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label for="">Archivo:</label>
                        <input name="archivo_solicitud" id="archivo_solicitud" type="file" class="form-control">
                    </div>

                    <div class="col-md-6">
                      <label for="">Tipo de Solicitud:</label>
                     <select name="tipo_radicado"  class="form-control">
                       <option value="entrada">Entrada</option>
                       <option value="salida">Salida</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Fecha:</label>
                    <input name="fecha" id="fecha" type="date" value="<?php echo date('Y-m-d');?>" class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="">Número Radicado:</label>
                    <input name="radicado" id="radicado" type="number"  class="form-control" >
                </div>
                </div>

        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-success" id="btnCompleteSolicitud" onclick="validateSolicitud('<?php echo e(route('validate.solicitud')); ?>')">Completado <i class="fas fa-times-circle"></i></button>
        </div>
      </div>
    </div>
</div>
<?php /**PATH /home/fomiclo27/public_html/resources/views/modals/create-solicitudes.blade.php ENDPATH**/ ?>