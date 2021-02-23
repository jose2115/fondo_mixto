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
        <?php $__currentLoopData = $soles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php if($sole->razon_social): ?> <span class="badge bg-gradient-warning"> <?php echo e($sole->razon_social); ?> </span> <?php else: ?> <span class="badge bg-gradient-warning">Persona Natural</span> <?php endif; ?></td>
                <td><?php echo e($sole->representante_legal); ?></td>
                <td><?php echo e($sole->nid); ?></td>
                <td><?php echo e($sole->email); ?></td>
                <td><?php echo e($sole->celular); ?></td>


                <td class="text-center">
                   <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modalCreate2" data-id="<?php echo e($sole->id); ?>"   data-persona_id="<?php echo e($sole->persona_id); ?>"  data-proponente_id="<?php echo e($sole->proponente_id); ?>"
                    data-nid="<?php echo e($sole->nid); ?>" data-nombre="<?php echo e($sole->nombre); ?>" data-apellido="<?php echo e($sole->apellido); ?>" data-razon_social="<?php echo e($sole->razon_social); ?>" data-email="<?php echo e($sole->email); ?>"
                    data-direccion="<?php echo e($sole->direccion); ?>" data-celular="<?php echo e($sole->celular); ?>" data-id_departamento="<?php echo e($sole->departamento_id); ?>" data-municipio_id="<?php echo e($sole->municipio_id); ?>"
                    data-representante_legal="<?php echo e($sole->cc); ?>" data-id_departamento2="<?php echo e($sole->departamento2); ?>" data-municipio_id_r="<?php echo e($sole->municipio_r); ?>" data-direccion_r="<?php echo e($sole->direccion_r); ?>"
                    data-celular_r="<?php echo e($sole->celular_r); ?>" data-direccion_r="<?php echo e($sole->direccion_r); ?>" data-correo_r="<?php echo e($sole->correo_r); ?>"> 
                    
                    
                    <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-solicitantes2.blade.php ENDPATH**/ ?>