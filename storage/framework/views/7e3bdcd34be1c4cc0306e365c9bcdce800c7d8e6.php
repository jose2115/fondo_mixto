<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del Eje</th>
            <th>Nombre del Programa</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $ejes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($eje->nombre_eje); ?></td>
            <td><?php echo e($eje->nombre_programa); ?></td>
            <td class="text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-id="<?php echo e($eje->id); ?>" data-nombre_eje="<?php echo e($eje->nombre_eje); ?>" data-nombre_programa="<?php echo e($eje->nombre_programa); ?>" data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-ejes.blade.php ENDPATH**/ ?>