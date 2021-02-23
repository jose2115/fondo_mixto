
<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Informacion Solicitud:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>

  
  <?php if($solicitud->categoria->tipo_solicitud !== 'Proyecto'): ?>

  <div class="card-body">
    <div class="parte1">
    <dl class="row">
      <dt class="col-sm-4">Radicado:</dt>
      <dd class="col-sm-8">#<?php echo e($solicitud->radicado); ?></dd>
        <dt class="col-sm-4">Categoria:</dt>
        <dd class="col-sm-8"><?php echo e($solicitud->categoria->tipo_solicitud); ?></dd>

        <dt class="col-sm-4">Solicitante:</dt>
        <dd class="col-sm-8">
            <?php if($solicitud->solicitante->razon_social): ?>
            <?php echo e($solicitud->solicitante->razon_social); ?>

            <?php else: ?>
            <?php echo e($solicitud->solicitante->nombre); ?> <?php echo e($solicitud->solicitante->apellido); ?>

            <?php endif; ?>
        </dd>

        <dt class="col-sm-4">Descripcion</dt>
        <dd class="col-sm-8">
            <?php echo e($solicitud->descripcion); ?>

        </dd>

       </dl>
            
      <dl class="row derecha">
        <dt class="col-sm-12 archivo">Archivo</dt>
        <dd class="col-sm-8"><?php if($solicitud->archivo): ?> <a target="_blank" href="<?php echo e(asset('documentos/solicitudes/')); ?>/<?php echo e($solicitud->id.'/'.$solicitud->archivo); ?>"><img class="pdf" src="<?php echo e(asset('img/pdf_ico.png')); ?>" alt=""></a> <?php else: ?> No se cargo archivo <?php endif; ?></dd>
      </dl>

            </div>
    <?php if(count($solicitud->clausuras)==0): ?>
        
    
    <button type="button" id="btn_show_send2-<?php echo e($solicitud->id); ?>" class="btn btn-primary btn-sm" onclick="enviarRecepcion(this);" data-href="<?php echo e(route('solicitud.recepcion', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A RECEPCION">RECEPCION</button>
    <button type="button" id="btn_show_send6-<?php echo e($solicitud->id); ?>" class="btn btn-default btn-sm" onclick="enviarAsistente(this);" data-href="<?php echo e(route('solicitud.asistente', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A ASISTENTE">ASISTENTE</button>

    <button type="button" id="btn_show_send2-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm" onclick="sendManagement(this);" data-href="<?php echo e(route('solicitud.management', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A GERENCIA">GERENCIA</button>
    <button type="button" id="btn_show_send-<?php echo e($solicitud->id); ?>" class="btn btn-success btn-sm" onclick="enviarJuridica(this);" data-href="<?php echo e(route('solicitud.juridica', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A JURIDICA">JURIDICA</i></button>
        
    <button type="button" id="btn_show_send-<?php echo e($solicitud->id); ?>" class="btn btn-warning btn-sm" onclick="enviarProyectos(this);" data-href="<?php echo e(route('solicitud.proyectos', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A PROYECTOS">PROYECTOS</i></button>
   <?php endif; ?>
  </div>
    </div>
  
  <?php endif; ?>




  <?php if($solicitud->categoria->tipo_solicitud == 'Proyecto'): ?>
      <!-- /.card-header -->

      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Radicado:</dt>
            <dd class="col-sm-8">#<?php echo e($solicitud->radicadoCurrent->first()->codigo_radicado); ?></dd>
            <dt class="col-sm-4">Estado:</dt>
            <dd class="col-sm-8">#<span id="row-status-<?php echo e($solicitud->id); ?>"><?php echo e($solicitud->proyecto->procesoCurrent->first()->nombre_proceso); ?></span></dd>
            <dt class="col-sm-4">Categoria:</dt>
            <dd class="col-sm-8"><?php echo e($solicitud->categoria->tipo_solicitud); ?></dd>

            <dt class="col-sm-4">Solicitante:</dt>
            <dd class="col-sm-8">
                <?php if($solicitud->solicitante->razon_social): ?>
                <?php echo e($solicitud->solicitante->razon_social); ?>

                <?php else: ?>
                <?php echo e($solicitud->solicitante->nombre); ?> <?php echo e($solicitud->solicitante->apellido); ?>

                <?php endif; ?>
            </dd>

            <dt class="col-sm-4">Descripcion</dt>
            <dd class="col-sm-8">
                <?php echo e($solicitud->descripcion); ?>

            </dd>

            <dt class="col-sm-4">Archivo</dt>
        <dd class="col-sm-8"><?php if($solicitud->archivo): ?> <a target="_blank" href="<?php echo e(asset('documentos/solicitudes/')); ?>/<?php echo e($solicitud->id.'/'.$solicitud->archivo); ?>">PDF</a> <?php else: ?> No se cargo archivo <?php endif; ?></dd>
        </dl>

        
        <?php if(count($solicitud->clausuras)==0): ?>
        <button type="button" id="btn_show_send2-<?php echo e($solicitud->id); ?>" class="btn btn-primary btn-sm" onclick="enviarRecepcion(this);" data-href="<?php echo e(route('solicitud.recepcion', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A RECEPCION">RECEPCION</button>

        <button type="button" id="btn_show_send2-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm" onclick="sendManagement(this);" data-href="<?php echo e(route('solicitud.management', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A GERENCIA">GERENCIA</button>
      <button type="button" id="btn_show_send6-<?php echo e($solicitud->id); ?>" class="btn btn-default btn-sm" onclick="enviarAsistente(this);" data-href="<?php echo e(route('solicitud.asistente', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A ASISTENTE">ASISTENTE</button>

        <button type="button" id="btn_show_send-<?php echo e($solicitud->id); ?>" class="btn btn-success btn-sm" onclick="enviarJuridica(this);" data-href="<?php echo e(route('solicitud.juridica', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A JURIDICA">JURIDICA</i></button>
        
        <button type="button" id="btn_show_send-<?php echo e($solicitud->id); ?>" class="btn btn-warning btn-sm" onclick="enviarProyectos(this);" data-href="<?php echo e(route('solicitud.proyectos', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A PROYECTOS">PROYECTOS</i></button>
        <?php endif; ?>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-12 col-sm-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Anexos:
      </h3>
      <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="table-responsive">
          <table class="table table-hover table-sm mejoratb">
              <thead class="thead-light">
                  <tr>
                      <th>#</th>
                      <th>Documento</th>
                      <th>Archivo</th>                       
                  </tr>
              </thead>
              <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $anexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($anexo->documento->tipo_documento); ?></td>
                  <td>
                    <a target="_blank" href="<?php echo e(asset('/documentos/anexos/'.$anexo->solicitud_id.'/'.$anexo->name)); ?>"
                      class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></a>
                  </td>                   
               </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                      <td colspan="3"><center>No existen anexos </center></td>
                    </tr>
                <?php endif; ?>                  
              </tbody>
          </table>
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Poblacion Afectada:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover table-sm mejoratb">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Poblacion</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $solicitud->poblaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poblacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($poblacion->clasificacion->tipo_poblacion); ?></td>
                        <td><?php echo e($poblacion->detalle); ?></td>
                        <td><?php echo e($poblacion->pivot->numero_persona); ?></td>
                     </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>



<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Presupuestos:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm mejoratb">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>                      
                        <th>Recurso Municipio</th>
                        <th>Fondo Mixto</th>
                        <th>Ingreso Cultura</th>
                        <th>Ingreso Propio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $solicitud->proyecto->presupuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presupuesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td class="text-center"><?php echo e($loop->iteration); ?></td>                      
                        <td class="text-center">$<?php echo e(number_format($presupuesto->recurso_municipio, 0)); ?></td>
                        <td class="text-center">$<?php echo e(number_format($presupuesto->fondo_mixto, 0)); ?></td>
                        <td class="text-center">$<?php echo e(number_format($presupuesto->ministerio_cultura, 0)); ?></td>
                        <td class="text-center">$<?php echo e(number_format($presupuesto->ingreso_propio, 0)); ?></td>
                     </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>




  


<?php endif; ?>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-text-width"></i>
      Historial:
    </h3>
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm mejoratb">
          <thead class="thead-light">
              <tr>
                  <th>#</th>
                  <th>Observación</th>                    
                  <th>Fecha</th>                    
              </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $historials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center"><?php echo e($loop->iteration); ?></td>
                  <td class="text-center"><?php echo e($h->descripcion); ?></td>
                  <td class="text-center"><?php echo e($h->created_at); ?></td>
               </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
      </table>
  </div>
  </div>
</div>

<?php /**PATH C:\laragon\www\parque\resources\views/ajax/detail-director.blade.php ENDPATH**/ ?>