<table id="tabla" class="table table-hover table-sm mejoratb">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Línea</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th style="width:20%" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $lineas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($linea->nombre_linea); ?></td>
                    <td><?php echo e($linea->descripcion); ?></td>
                    <td>
                        <?php if($linea->status): ?>
                        <button class="btn badge bg-gradient-warning sm" onclick="changeLinea('<?php echo e(route('lineas.status', $linea->id)); ?>'); ">Activo</button>
                        <?php else: ?>
                        <button class="btn badge bg-gradient-info sm" onclick="changeLinea('<?php echo e(route('lineas.status', $linea->id)); ?>'); ">Inactivo</button>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-id="<?php echo e($linea->id); ?>" data-nombre_linea="<?php echo e($linea->nombre_linea); ?>" data-descripcion="<?php echo e($linea->descripcion); ?>" data-target="#modalEdit"> <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
 </table>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-lineas.blade.php ENDPATH**/ ?>