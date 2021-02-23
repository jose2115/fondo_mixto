<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Titulo</th>
                <th>Proponente</th>
                <th>Descripción</th>
                <th>Tipo de Solicitud</th>
                <th>Cantidad de Archivos</th>
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $anexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($a->titulo); ?></td>
            <td>
                <?php if($a->razon_social!='Natural'): ?>
                <?php echo e($a->razon_social); ?>

                <?php else: ?>
                <?php echo e($a->nombre); ?> <?php echo e($a->apellido); ?>

                <?php endif; ?>
            </td>
            <td><?php echo e($a->descripcion); ?></td>
            <td><?php echo e($a->tipo_solicitud); ?></td>
            <td><?php echo e($a->total); ?></td>
            <td class="text-center">
               <a href="<?php echo e(route('anexos.show', $a->id)); ?>" class="btn btn-info btn-sm"> <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="VER DETALLES"></i></a>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-anexos.blade.php ENDPATH**/ ?>