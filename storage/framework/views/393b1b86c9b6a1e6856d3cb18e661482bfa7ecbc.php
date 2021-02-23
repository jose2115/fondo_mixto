<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>               
                <th>Banco</th>
                <th>Nit</th>
                <th>Fecha</th>
                <th>Cheque N°</th>
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $comprobantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>           
            <td><?php echo e($c->banco); ?></td>
            <td><?php echo e($c->nit); ?></td>
            <td><?php echo e($c->fecha); ?></td>
            <td><?php echo e($c->cheque); ?></td>
            <td class="text-center">
               <a href="<?php echo e(route('comprobantes.show', $c->id)); ?>" class="btn btn-info btn-sm"> <i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="VER DETALLES"></i></a>
            
            
                <a href="<?php echo e(route('comprobantes.edit', $c->id)); ?>" class="btn btn-warning btn-sm"> <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></a>
                <form class="form-del-com" action="<?php echo e(route('comprobantes.destroy', $c->id)); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="button" class="btn btn-danger btn-sm del-comprobante"><i class="fas fa-window-close" data-toggle="tooltip" data-placement="top" title="ELIMINAR"></i></button>
                </form>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-comprobantes.blade.php ENDPATH**/ ?>