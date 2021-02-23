<table id="tabla" class="display table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Categoria</th>
                <th>Cod Solicitud</th>
                <th>Solicitante</th>
                <th>Descripción</th>      
                <th>Estado</th>          
                <th style="width: 8%">Fecha de Registro</th>               
                  
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($solicitud->categoria->tipo_solicitud); ?></td>
            <td><?php echo e($solicitud->id); ?></td>
            <td>
                <?php if($solicitud->solicitante->razon_social): ?>
                <?php echo e($solicitud->solicitante->razon_social); ?>

                <?php else: ?>
                <?php echo e($solicitud->solicitante->nombre); ?> <?php echo e($solicitud->solicitante->apellido); ?>

                <?php endif; ?>
            </td>
            <td><?php echo e($solicitud->descripcion); ?></td>        
            <td>
                <?php if(count($solicitud->clausuras)>0): ?>
                Cerrado
                <?php else: ?>
                Abierto
                <?php endif; ?>
                </td>        
            <td style="width: 8%"><?php echo e($solicitud->fecha); ?></td>                    
            <td class="text-center">
                <button type="button" id="btn_show_detail-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm show-details" data-toggle="modal" data-href="<?php echo e(route('director.show', $solicitud->id)); ?>" data-target="#modalShow"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="VER DETALLE"></i></button>
                <?php if($solicitud->categoria->tipo_solicitud == 'Proyecto'): ?>
                <?php endif; ?>

                <a href="<?php echo e(route('admin.edit', $solicitud->id)); ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="EDITAR"></i>
                </a>

            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-admin.blade.php ENDPATH**/ ?>