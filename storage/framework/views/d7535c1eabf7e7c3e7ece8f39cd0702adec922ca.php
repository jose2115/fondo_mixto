<div class="modal fade" id="modalEdit" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer">
          <h4 id="centrartitle">Editar Solicitantes <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
            <form id="form_edit" action="<?php echo e(route('solicitante.update', 'solicitante')); ?>" method="POST" onkeypress="return disableEnterKey(event);">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <input type="hidden" name="id_row" id="id_row">
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="persona_id" ><strong>Tipo de persona:</strong></label>
                        <select name="persona_id" id="persona_id" class="form-control" required>
                            <option value="">---Escoger Tipo de persona---</option>
                            <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($persona->id); ?>"><?php echo e($persona->tipo_persona); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-4" id="tipo">
                        <label for="razon"><strong>Razón Social:</strong></label>
                        <input name="razon_social" id="razon_social" placeholder="Razón Social" type="text" class="form-control" required>
                    </div>
                    <div class="col-md-4" id="nombre">
                        <label for="nombre" ><strong>Nombre:</strong></label>
                        <input name="nombre" id="nombre" placeholder="Nombre" type="text"  class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="apellido" ><strong>Apellido:</strong></label>
                        <input name="apellido" id="apellido" placeholder="Apellido" type="text"  class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nit_cc"><strong>NIT / CC:</strong></label>
                        <input name="nid" id="nid" placeholder="Nit / CC" type="text"  class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="departamento"><strong>Departamento:</strong></label>
                        <select name="nombre_departamento" id="id_departamento" class="form-control departamento select2" required>
                            <option value="">---Escoger Departamento---</option>
                            <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($departamento->id); ?>"><?php echo e($departamento->nombre_departamento); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="municipio" ><strong>Municipio:</strong></label>
                        <select name="municipio_id" id="municipio_id" class="form-control municipio select2" required>
                            <option value="">---Escoger Municipio---</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="direccion" ><strong>Dirección:</strong></label>
                        <input name="direccion" id="direccion" placeholder="Dirección" type="text"  class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="celular" ><strong>Celular:</strong></label>
                        <input name="celular" id="celular" placeholder="Celular" type="text"  class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" ><strong>Correo Electrónico:</strong></label>
                        <input name="email" id="email" placeholder="Correo Electrónico" type="email"  class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="representante" ><strong>Representante Legal:</strong></label>
                        <input name="representante_legal" id="representante_legal" placeholder="Representante Legal" type="text"  class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="proponente" ><strong>Tipo de Proponente:</strong></label>
                        <select name="proponente_id" id="proponente_id" class="form-control" required>
                        <option value="">---Escoger Tipo de Proponente---</option>
                            <?php $__currentLoopData = $proponentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proponente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($proponente->id); ?>"><?php echo e($proponente->nombre_proponente); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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
<?php /**PATH /home/fomiclo27/public_html/resources/views/modals/edit-solicitante.blade.php ENDPATH**/ ?>