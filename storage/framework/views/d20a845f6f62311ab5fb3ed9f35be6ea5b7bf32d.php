<div class="col-md-12 col-sm-12">
  <?php if($solicitud->categoria->tipo_solicitud != 'Proyecto'): ?>
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
      <!-- /.card-header -->
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
            </dd>*
            <dt class="col-sm-4">Descripcion</dt>
            <dd class="col-sm-8">
                <?php echo e($solicitud->descripcion); ?>

            </dd>
            <br>

            <dt class="col-sm-4">Archivo</dt><br>
        <dd class="col-sm-8"><?php if($solicitud->archivo): ?> <a target="_blank" href="<?php echo e(asset('documentos/solicitudes/')); ?>/<?php echo e($solicitud->id.'/'.$solicitud->archivo); ?>">PDF</a> <?php else: ?> No se cargo archivo <?php endif; ?></dd>
        </dl>
        <?php if( $solicitud->categoria->id==1 || $solicitud->categoria->id==4): ?>

        <button type="button" id="btn_gerencia_send-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm send-gerencia" onclick="sendManagement(this);" data-href="<?php echo e(route('solicitud.management', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A GERENCIA"><i class="fas fa-share-square"></i></button>
        <?php endif; ?>
        <?php if($solicitud->categoria->id==3 || $solicitud->categoria->id==2  ): ?>
        <button type="button" id="btn_director_send-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm send-director" onclick="enviarDirector(this);" data-href="<?php echo e(route('solicitud.director', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A DIRECTOR ADMINISTRATIVO"><i class="fas fa-share-square"></i></button>
        <?php endif; ?>
        <?php if($solicitud->categoria->id==5): ?>
        <button type="button" id="btn_gerencia_send3-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm send-gerencia" onclick="enviarJuridica(this);" data-href="<?php echo e(route('solicitud.juridica', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A JURIDICA"><i class="fas fa-share-square"></i></button>
        <?php endif; ?>
        <?php if($solicitud->categoria->id==6): ?>
        <button type="button" id="btn_gerencia_send6-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm send-gerencia" onclick="enviarAsistente(this);" data-href="<?php echo e(route('solicitud.asistente', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A ASISTENTE ADMINISTRATIVO"><i class="fas fa-share-square"></i></button>
        <?php endif; ?>

      </div>
      <!-- /.card-header -->
    </div>
    <!-- /.card -->
</div>
<?php endif; ?>
<?php if($solicitud->categoria->tipo_solicitud == 'Proyecto'): ?>
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
          <dt class="col-sm-4">Radicado:</dt>
            <dd class="col-sm-8">#<?php echo e($solicitud->radicadoCurrent->first()->codigo_radicado); ?></dd>
            <dt class="col-sm-4">Estado:</dt>
            <dd class="col-sm-8">#<span id="row-status-<?php echo e($solicitud->id); ?>"><?php echo e($solicitud->proyecto->procesoCurrent->first()->nombre_proceso); ?></span></dd>
            <dt class="col-sm-4">Categoria:</dt>
            <dd class="col-sm-8"><?php echo e($solicitud->categoria->tipo_solicitud); ?></dd>
            <dt class="col-sm-4">Titulo:</dt>
            <dd class="col-sm-8"><?php echo e($solicitud->proyecto->titulo); ?></dd>

            <dt class="col-sm-4">Fechas de Realizacion:</dt>
            <dd class="col-sm-8">
                Fecha Inicio: <?php echo e($solicitud->proyecto->fecha_inicio); ?> -
                Fecha Final: <?php echo e($solicitud->proyecto->fecha_final); ?>

            </dd>



        </dl>
        <?php if( $solicitud->categoria->id==1): ?>

        <button type="button" id="btn_gerencia_send-<?php echo e($solicitud->id); ?>" class="btn btn-info btn-sm send-gerencia" onclick="sendManagement(this);" data-href="<?php echo e(route('solicitud.management', $solicitud->id)); ?>" data-toggle="tooltip" data-placement="top" title="ENVIAR A GERENCIA"><i class="fas fa-share-square"></i></button>
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
          Poblacion Afectada:
        </h3>
        <div class="card-tools" >
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body" >

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
                        <th>Rubro</th>
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
                        <td class="text-center">$<?php echo e(number_format($presupuesto->rubro, 0)); ?></td>
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
<?php /**PATH /home/fomiclo27/public_html/resources/views/ajax/detail-solicitud.blade.php ENDPATH**/ ?>