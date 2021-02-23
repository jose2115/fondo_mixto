<table id="tabla" class="display table table-hover table-sm mejoratb table-responsive">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Categoria</th>
                <th>Solicitante</th>
                <th>Descripción</th>
                <th style="width: 8%">Fecha de Registro</th>
                <th class="text-center">Movimientos</th>
            </tr>
    </thead>
    <tbody>
        <?php if(!empty($solicitudes)): ?>
        <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($solicitud->categoria->tipo_solicitud); ?></td>
            <td>
                <?php if($solicitud->solicitante->razon_social): ?>
                <?php echo e($solicitud->solicitante->razon_social); ?>

                <?php else: ?>
                <?php echo e($solicitud->solicitante->nombre); ?> <?php echo e($solicitud->solicitante->apellido); ?>

                <?php endif; ?>
            </td>
            <td><?php echo e($solicitud->descripcion); ?></td>
            <td style="width: 8%"><?php echo e($solicitud->fecha); ?></td>
                     <td>
                <?php $__currentLoopData = $solicitud->historiales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($item->descripcion); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
            <td>
                No Existen datos
            </td>
        </tr>
        <?php endif; ?>

    </tbody>
</table>

<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-solicitudes-filtro.blade.php ENDPATH**/ ?>