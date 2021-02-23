<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del proponente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $proponentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proponente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($proponente->nombre_proponente); ?></td>
            <td class="text-center">
                <button type="button" class="btn btn-primary show-details" data-toggle="modal" data-id="<?php echo e($proponente->id); ?>" data-nombre_proponente="<?php echo e($proponente->nombre_proponente); ?>"  data-target="#modalEdit"> <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>


<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-proponente.blade.php ENDPATH**/ ?>