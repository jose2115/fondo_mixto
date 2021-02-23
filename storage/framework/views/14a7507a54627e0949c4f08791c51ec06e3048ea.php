<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-right">
        <tr>
            <th>Item</th>
            <th>Clasificacion</th>
            <th>Detalle</th>
            <th style="width:20%" class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $poblaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poblacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
            <td>

                <?php if($poblacion->clasificacion_id == 1): ?>
                    <span class="badge bg-gradient-primary"><?php echo e($poblacion->clasificacion->tipo_poblacion); ?></span>
                <?php endif; ?>

                <?php if($poblacion->clasificacion_id == 2): ?>
                    <span class="badge bg-warning"><?php echo e($poblacion->clasificacion->tipo_poblacion); ?></span>
                <?php endif; ?>

                <?php if($poblacion->clasificacion_id == 3): ?>
                    <span class="badge bg-secondary"><?php echo e($poblacion->clasificacion->tipo_poblacion); ?></span>
                <?php endif; ?>

                <?php if($poblacion->clasificacion_id == 4): ?>
                    <span class="badge bg-info"><?php echo e($poblacion->clasificacion->tipo_poblacion); ?></span>
                <?php endif; ?>

                <?php if($poblacion->clasificacion_id > 4): ?>
                    <span class="badge bg-danger"><?php echo e($poblacion->clasificacion->tipo_poblacion); ?></span>
                <?php endif; ?>

            </td>
            <td><?php echo e($poblacion->detalle); ?></td>
            <td class="text-center">
                <button type="button" class="btn btn-primary show-details" data-toggle="modal" data-id="<?php echo e($poblacion->id); ?>" data-item="<?php echo e($poblacion->item); ?>" data-clasificacion_id="<?php echo e($poblacion->clasificacion_id); ?>" data-detalle="<?php echo e($poblacion->detalle); ?>"  data-target="#modalEdit"> <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>
<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-poblacion.blade.php ENDPATH**/ ?>