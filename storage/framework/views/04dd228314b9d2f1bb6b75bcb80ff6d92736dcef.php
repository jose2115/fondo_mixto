<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Email</th>
            <th>Celular</th>           
            <th>Jefe</th>
            <th>Usuario</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($empleado->name_complete); ?></td>
            <td><?php echo e($empleado->email); ?></td>
            <td><?php echo e($empleado->celular); ?></td>
                

            <td>
                <?php if($empleado->is_jefe): ?>
                    <button class="btn badge bg-gradient-warning sm" onclick="changeBoss('<?php echo e(route('empleados.status', $empleado->id)); ?>');">SI</button>
                 <?php else: ?>
                    <button class="btn badge bg-gradient-info sm" onclick="changeBoss('<?php echo e(route('empleados.status', $empleado->id)); ?>');">NO</button>
                <?php endif; ?>
            </td>
            <td><?php echo e($empleado->user->documento); ?></td>
            <td class="text-center">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Opciones
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">                     
                      <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-id="<?php echo e($empleado->id); ?>" data-nid="<?php echo e($empleado->nid); ?>" data-nombre="<?php echo e($empleado->nombre); ?>" data-apellido="<?php echo e($empleado->apellido); ?>" data-email="<?php echo e($empleado->email); ?>" data-celular="<?php echo e($empleado->celular); ?>"  data-target="#modalEdit"> <i class="fas fa-pencil-alt"></i>Editar</button>
                      <button type="button" class="btn btn-info dropdown-item" data-toggle="modal" data-href="<?php echo e(route('empleados.show', $empleado->id)); ?>" data-target="#modalShow" class="btn btn-warning btn-sm"> <i class="fas fa-eye"></i>Ver</button>
                    </div>
                  </div>
                </div>
              
            </td>

          
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>


<?php /**PATH C:\laragon\www\parque\resources\views/ajax/table-empleados.blade.php ENDPATH**/ ?>