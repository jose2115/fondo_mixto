<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Indicador</th>
            <th class="text-center">Meta</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $indicadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($indicador->nombre_indicador); ?></td>
            <td><?php echo e($indicador->meta); ?></td>
            <td>
                <?php if($indicador->status): ?>
                    <button class="btn badge bg-gradient-warning sm" onclick="changeStatus('<?php echo e(route('indicador.status', $indicador->id)); ?>');">Activo</button>
                 <?php else: ?>
                    <button class="btn badge bg-gradient-info sm" onclick="changeStatus('<?php echo e(route('indicador.status', $indicador->id)); ?>');">Inactivo</button>
                <?php endif; ?>
            </td>
            <td style="width: 20%" class="text-center">
                <button type="button" id="" class="btn btn-primary show-details" data-toggle="modal" data-id="<?php echo e($indicador->id); ?>" data-nombre="<?php echo e($indicador->nombre_indicador); ?>" data-eje="<?php echo e($indicador->eje_id); ?>" data-meta="<?php echo e($indicador->meta); ?>" data-target="#modalEdit"> <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
             </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>
<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-indicadores.blade.php ENDPATH**/ ?>