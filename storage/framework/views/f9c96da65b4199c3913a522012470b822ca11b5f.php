<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Informacion detallada:
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Nombre:</dt>
            <dd class="col-sm-8"><?php echo e($empleado->name_complete); ?> (<?php echo e($empleado->nid); ?>).</dd>

            <dt class="col-sm-4">Contacto:</dt>
            <dd class="col-sm-8"><?php echo e($empleado->email); ?> (<?php echo e($empleado->celular); ?>) </dd>

            
            <dd class="col-sm-8">
                (¿Jefe?:  
                <?php if($empleado->is_jefe): ?>
                    <span class="badge bg-gradient-primary sm">SI</span>
                <?php else: ?>
                    <span class="badge bg-gradient-danger sm">NO</span>
                <?php endif; ?>
                ).
            </dd>

            <dt class="col-sm-8">Correo</dt>
            <dd class="col-sm-8"><?php echo e($empleado->user->email); ?> </dd>
        </dl>

      </div>
      <!-- /.card-body -->
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Informacion de Ingreso a Sistema:
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Usuario:</dt>
            <dd class="col-sm-8"><?php echo e($empleado->user->documento); ?><dd>

           
            </dd>

            <dt class="col-sm-4">Rol</dt>
            <?php $__currentLoopData = $empleado->user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <dd class="col-sm-8"><?php echo e($item->name); ?> </dd>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           

        </dl>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div><?php /**PATH C:\laragon\www\parque\resources\views/ajax/detail-empleado.blade.php ENDPATH**/ ?>