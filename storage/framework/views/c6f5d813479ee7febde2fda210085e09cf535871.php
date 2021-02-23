 <table id="tabla" class="table table-hover table-sm mejoratb">
        <thead class="thead-light">
            <tr>
                <th>Item</th>
                <th>Tipo de Población</th>
                <th>Estado</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tipopoblaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipopoblacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($tipopoblacion->tipo_poblacion); ?></td>
                <td>
                    <?php if($tipopoblacion->status): ?>

                    <button class="btn badge bg-gradient-warning sm" onclick="changeStatus('<?php echo e(route('tipopoblacion.status', $tipopoblacion->id)); ?>');">Activo</button>
                    <?php else: ?>
                    <button class="btn badge bg-gradient-info sm" onclick="changeStatus('<?php echo e(route('tipopoblacion.status', $tipopoblacion->id)); ?>');">Inactivo</button>
                    <?php endif; ?>
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-primary show-details" data-toggle="modal" data-id="<?php echo e($tipopoblacion->id); ?>" data-tipo_poblacion="<?php echo e($tipopoblacion->tipo_poblacion); ?>"  data-target="#modalEdit"> <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-tipodepoblacion.blade.php ENDPATH**/ ?>