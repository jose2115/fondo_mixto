<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la Fuente de Verificación</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $fuentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td> <?php echo e($fuente->fuente_verificacion); ?></td>
            <td class="text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-id="<?php echo e($fuente->id); ?>" data-fuente_verificacion="<?php echo e($fuente->fuente_verificacion); ?>"  data-target="#modalEdit"> <i class="fas fa-pencil-alt"></i>Editar</button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-fuenteverificacion.blade.php ENDPATH**/ ?>