<table id="tabla2" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>CC</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Direccion</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $solis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($soli->nombre); ?> <?php echo e($soli->apellido); ?></td>
                <td><?php echo e($soli->cc); ?></td>
                <td><?php echo e($soli->correo_r); ?></td>
                <td><?php echo e($soli->celular_r); ?></td>
                <td><?php echo e($soli->direccion_r); ?></td>

               <td class="text-center">
                    <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modalCreate2" data-id="<?php echo e($soli->id); ?>"   data-persona_id="<?php echo e($soli->persona_id); ?>"  data-proponente_id="<?php echo e($soli->proponente_id); ?>"
                    data-nid="<?php echo e($soli->nid); ?>"  data-nombre="<?php echo e($soli->nombre); ?>" data-apellido="<?php echo e($soli->apellido); ?>" data-razon_social="<?php echo e($soli->razon_social); ?>" data-email="<?php echo e($soli->email); ?>"
                    data-direccion="<?php echo e($soli->direccion); ?>" data-celular="<?php echo e($soli->celular); ?>" data-id_departamento="<?php echo e($soli->municipio->departamento->id); ?>" data-municipio_id="<?php echo e($soli->municipio_id); ?>"
                    data-representante_legal="<?php echo e($soli->cc); ?>" data-id_departamento2="<?php echo e($soli->municipio->departamento->id); ?>" data-municipio_id_r="<?php echo e($soli->municipio_r); ?>" data-direccion_r="<?php echo e($soli->direccion_r); ?>"
                    data-celular_r="<?php echo e($soli->celular_r); ?>" data-direccion_r="<?php echo e($soli->direccion_r); ?>" data-correo_r="<?php echo e($soli->correo_r); ?>" > <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-solicitantes3.blade.php ENDPATH**/ ?>