<table id="tabla" class="display table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Radicado</th>
                <th>Categoria</th>
                <th>Solicitante</th>
                <th>Descripción</th>               
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($solicitud->radicado); ?></td>
            <td><?php echo e($solicitud->categoria->tipo_solicitud); ?></td>
            <td>
                <?php if($solicitud->solicitante->razon_social): ?>
                <?php echo e($solicitud->solicitante->razon_social); ?>

                <?php else: ?>
                <?php echo e($solicitud->solicitante->nombre); ?> <?php echo e($solicitud->solicitante->apellido); ?>

                <?php endif; ?>
            </td>
            <td><?php echo e($solicitud->descripcion); ?></td>           
            <td class="text-center">
                <button type="button" id="btn_show_detail-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm show-details" data-toggle="modal" data-href="<?php echo e(route('asistente.show', $solicitud->id)); ?>" data-target="#modalShow"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="VER DETALLE"></i></button>
                <button type="button" class="btn btn-warning btn-sm show-details" data-toggle="modal" data-target="#modalAnexos" data-id="<?php echo e($solicitud->id); ?>"><i class="fas fa-paper-plane" data-toggle="tooltip" data-placement="top" title="AGREGAR ANEXOS"></i></button>
                <button type="button" class="btn btn-info btn-sm show-details" data-toggle="modal" data-target="#modalAnexos2" data-id="<?php echo e($solicitud->id); ?>"><i class="fas fa-book" data-toggle="tooltip" data-placement="top" title="AGREGAR ESTUDIO"></i></button>

               

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-solicitudes-asistenteadmin.blade.php ENDPATH**/ ?>