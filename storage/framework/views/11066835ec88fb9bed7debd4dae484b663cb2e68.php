<table class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Motivo</th>
            <th>Fecha</th>            
        </tr>
    </thead>
    <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $solicitud->clausuras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($c->motivo); ?></td>
            <td><?php echo e($c->fecha); ?></td>
           
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="3"><center>No existen datos</center></td></tr>
        <?php endif; ?>      
    </tbody>
</table>

<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-clausura.blade.php ENDPATH**/ ?>