<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la dependencia</th>
            <th>Descripción</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $dependencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($dependencia->nombre_dependencia); ?></td>
                <td><?php echo e($dependencia->descripcion); ?></td>
                <td class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-id="<?php echo e($dependencia->id); ?>" data-nombre_dependencia="<?php echo e($dependencia->nombre_dependencia); ?>" data-descripcion="<?php echo e($dependencia->descripcion); ?>" data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-dependencias.blade.php ENDPATH**/ ?>