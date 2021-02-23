<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Razon Social</th>
            <th>Representante legal</th>
            <th>Nit</th>
            <th>Correo</th>
            <th>Celular</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $solicitantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
             
            <td><?php if($solicitante->razon_social): ?> <span class="badge bg-gradient-warning"> <?php echo e($solicitante->razon_social); ?> </span> <?php else: ?> <span class="badge bg-gradient-warning">Persona Natural</span> <?php endif; ?></td>
                <td><?php echo e($solicitante->representante_legal); ?></td>
                <td><?php echo e($solicitante->nid); ?></td>
                <td><?php echo e($solicitante->email); ?></td>
                <td><?php echo e($solicitante->celular); ?></td>


                <td class="text-center">
                   <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modalCreate2" data-id="<?php echo e($solicitante->id); ?>"   data-persona_id="<?php echo e($solicitante->persona_id); ?>"  data-proponente_id="<?php echo e($solicitante->proponente_id); ?>"
                    data-nid="<?php echo e($solicitante->nid); ?>"  data-nombre="<?php echo e($solicitante->nombre); ?>" data-apellido="<?php echo e($solicitante->apellido); ?>" data-razon_social="<?php echo e($solicitante->razon_social); ?>" data-email="<?php echo e($solicitante->email); ?>"
                    data-direccion="<?php echo e($solicitante->direccion); ?>" data-celular="<?php echo e($solicitante->celular); ?>" data-id_departamento="<?php echo e($solicitante->municipio->departamento->id); ?>" data-municipio_id="<?php echo e($solicitante->municipio_id); ?>"
                    data-representante_legal="<?php echo e($solicitante->cc); ?>" data-id_departamento2="<?php echo e($solicitante->municipio->departamento->id); ?>" data-municipio_id_r="<?php echo e($solicitante->municipio_r); ?>" data-direccion_r="<?php echo e($solicitante->direccion_r); ?>"
                    data-celular_r="<?php echo e($solicitante->celular_r); ?>" data-direccion_r="<?php echo e($solicitante->direccion_r); ?>" data-correo_r="<?php echo e($solicitante->correo_r); ?>" > <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
 
<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-solicitantes.blade.php ENDPATH**/ ?>