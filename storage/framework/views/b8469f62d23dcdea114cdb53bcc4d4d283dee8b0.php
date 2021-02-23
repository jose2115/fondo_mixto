<table id="tabla" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Documento</th>
            <th>Archivo</th>        
            <th>Acciones</th>               
        </tr>
    </thead>
    <tbody>

      <?php $__empty_1 = true; $__currentLoopData = $anexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($anexo->documento->tipo_documento); ?></td>
        <td>
          <a target="_blank" href="<?php echo e(asset('/documentos/solicitudes/'.$anexo->solicitud_id.'/'.$anexo->name)); ?>"
            class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></a>
        </td>  
       <td>
        <?php if(count($solicitud->clausuras)==0): ?>
        <form class="form-del-ane" action="<?php echo e(route('delete.anexo', [$anexo->id, $solicitud->id])); ?>" method="POST" style="width: 8%">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button class="btn btn-danger btn-sm del-anexo" type="button" > X</button>

      </form>
      <?php endif; ?>
       </td>

     </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
         
      <?php endif; ?>                  
    </tbody>
</table><?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/table-anexos-edit.blade.php ENDPATH**/ ?>