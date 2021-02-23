
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

        <dt class="col-sm-4">Archivo</dt>
    <dd class="col-sm-8"><?php if($solicitud->archivo): ?> <a target="_blank" href="<?php echo e(asset('documentos/solicitudes/')); ?>/<?php echo e($solicitud->id.'/'.$solicitud->archivo); ?>">PDF</a> <?php else: ?> No se cargo archivo <?php endif; ?></dd>
    </dl>
    <button type="button"  id="btn_show_send-<?php echo e($solicitud->id); ?>"
      class="btn btn-warning btn-sm"
      onclick="enviarArchivo(this);"
      data-href="<?php echo e(route('solicitud.archivo', $solicitud->id)); ?>"
      data-toggle="tooltip" data-placement="top" title="ENVIAR A ARCHIVO">
      ARCHIVAR
  </button>
    <button type="button"  id="btn_show_send-<?php echo e($solicitud->id); ?>"
        class="btn btn-success btn-sm"
        onclick="enviarAsistente(this);"
        data-href="<?php echo e(route('solicitud.asistente', $solicitud->id)); ?>"
        data-toggle="tooltip" data-placement="top" title="ENVIAR A ASISTENTE ADMINISTRATIVO">
        ASISTENTE ADMINISTRATIVO
    </button>
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

            <dt class="col-sm-4">Descripción</dt>
            <dd class="col-sm-8">
                <?php echo e($solicitud->descripcion); ?>

            </dd>

            <dt class="col-sm-4">Archivo</dt>
        <dd class="col-sm-8"><?php if($solicitud->archivo): ?> <a target="_blank" href="<?php echo e(asset('documentos/solicitudes/')); ?>/<?php echo e($solicitud->id.'/'.$solicitud->archivo); ?>">PDF</a> <?php else: ?> No se cargo archivo <?php endif; ?></dd>
        </dl>
        <button type="button"  id="btn_show_send-<?php echo e($solicitud->id); ?>"
          class="btn btn-success btn-sm"
          onclick="enviarAsistente(this);"
          data-href="<?php echo e(route('solicitud.asistente', $solicitud->id)); ?>"
          data-toggle="tooltip" data-placement="top" title="ENVIAR A ASISTENTE ADMINISTRATIVO">
          ASISTENTE ADMINISTRATIVO
      </button>

      


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
          Proyecto:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Titulo:</dt>
            <dd class="col-sm-8"><?php echo e($solicitud->proyecto->titulo); ?></dd>

            <dt class="col-sm-4">Fechas de Realizacion:</dt>
            <dd class="col-sm-8">
                Fecha Inicio: <?php echo e($solicitud->proyecto->fecha_inicio); ?> -
                Fecha Final: <?php echo e($solicitud->proyecto->fecha_final); ?>

            </dd>

            <dt class="col-sm-4">Descripcion</dt>
            <dd class="col-sm-8">
                <?php echo e($solicitud->proyecto->descripcion); ?>

            </dd>

        </dl>

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
<div class="col-md-12 col-sm-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Concepto Gerencia:
      </h3>
      <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm mejoratb">
        <tr class="thead-light">
          <th>N°</th>
          <th>Estado</th>
          <th>Valor Aprobado</th>
          <th>Forma de pago</th>
          <th>Actividades</th>
          <th>Observaciones</th>
        </tr>
        <?php $__currentLoopData = $solicitud->observaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td>
                <?php if( $item->estado == 1): ?>
                    <?php echo e('Aprobado'); ?>

                    <?php else: ?>
                    <?php echo e('Rechazado'); ?>

                <?php endif; ?>
              </td>
              <td> $ <?php echo e(number_format($item->valor, 2)); ?></td>
              <td><?php echo e($item->pago); ?></td>
              <td><?php echo e($item->actividades); ?></td>
              <td><?php echo e($item->observaciones); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        Indicadores:
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
                      <th>Nombre Indicador</th>                     
                  </tr>
              </thead>
              <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $solicitud->indicadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td class="text-center"><?php echo e($loop->iteration); ?></td>
                  <td class="text-center"><?php echo e(($indicador->nombre_indicador)); ?></td>                     
               </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="2"><center>No existen datos</center></td></tr>
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
        Hisorial de Solicitud:
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
                      <th>Descripcion</th>
                      <th>Fecha</th>                      
                  </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $historials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                      <td class="text-center"><?php echo e($loop->iteration); ?></td>
                      <td class="text-center"><?php echo e($historial->descripcion); ?></td>
                      <td class="text-center"><?php echo e($historial->created_at); ?></td>
                                        
                   </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div><?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/detail-management.blade.php ENDPATH**/ ?>