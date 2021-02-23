
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
 
  {{-- validacion aqui  --}}
  @if($solicitud->categoria->tipo_solicitud !== 'Proyecto')

  <div class="card-body">
    <div class="parte1">
    <dl class="row">
      <dt class="col-sm-4">Radicado:</dt>
      <dd class="col-sm-8">#{{$solicitud->radicado}}</dd>          
        <dt class="col-sm-4">Categoria:</dt>
        <dd class="col-sm-8">{{$solicitud->categoria->tipo_solicitud}}</dd>

        <dt class="col-sm-4">Solicitante:</dt>
        <dd class="col-sm-8">
            @if ($solicitud->solicitante->razon_social)
            {{$solicitud->solicitante->razon_social}}
            @else
            {{$solicitud->solicitante->nombre}} {{$solicitud->solicitante->apellido}}
            @endif
        </dd>

        <dt class="col-sm-4">Descripcion</dt>
        <dd class="col-sm-8">
            {{$solicitud->descripcion}}
        </dd>

        </dl>
            
      <dl class="row derecha">
        <dt class="col-sm-12 archivo">Archivo</dt>
        <dd class="col-sm-8">@if($solicitud->archivo) <a target="_blank" href="{{asset('documentos/solicitudes/')}}/{{$solicitud->id.'/'.$solicitud->archivo}}"><img class="pdf" src="{{asset('img/pdf_ico.png')}}" alt=""></a> @else No se cargo archivo @endif</dd>
      </dl>

    </div>
    <button type="button"  id="btn_show_send-{{$solicitud->id}}"
        class="btn btn-success btn-sm" onclick="enviarJuridica(this);"
        data-href="{{route('solicitud.juridica', $solicitud->id)}}"
        data-toggle="tooltip" data-placement="top" title="ENVIAR A JURIDICA">
        <i class="fas fa-share-square"></i>
    </button>
  </div>
  
  @endif


{{-- division --}}

  @if($solicitud->categoria->tipo_solicitud == 'Proyecto')
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Radicado:</dt>
            <dd class="col-sm-8">#{{$solicitud->radicadoCurrent->first()->codigo_radicado}}</dd>
            <dt class="col-sm-4">Estado:</dt>
            <dd class="col-sm-8">#<span id="row-status-{{$solicitud->id}}">{{$solicitud->proyecto->procesoCurrent->first()->nombre_proceso}}</span></dd>
            <dt class="col-sm-4">Categoria:</dt>
            <dd class="col-sm-8">{{$solicitud->categoria->tipo_solicitud}}</dd>

            <dt class="col-sm-4">Solicitante:</dt>
            <dd class="col-sm-8">
                @if ($solicitud->solicitante->razon_social)
                {{$solicitud->solicitante->razon_social}}loca
                @else
                {{$solicitud->solicitante->nombre}} {{$solicitud->solicitante->apellido}}
                @endif
            </dd>
            <dt class="col-sm-4">Fecha de Registro:</dt>
            <dd class="col-sm-8">
               {{ $solicitud->fecha }}
               
            </dd>            

        <dt class="col-sm-4">Archivo</dt>
        <dd class="col-sm-8">@if($solicitud->archivo) <a target="_blank" href="{{asset('documentos/solicitudes/')}}/{{$solicitud->id.'/'.$solicitud->archivo}}">PDF</a> @else No se cargo archivo @endif</dd>
        </dl>

        <button type="button"  id="btn_show_send-{{$solicitud->id}}"
          class="btn btn-primary btn-sm"
          onclick="enviarJuridica(this);"
          data-href="{{route('solicitud.juridica', $solicitud->id)}}"
          data-toggle="tooltip" data-placement="top" title="ENVIAR A JURIDICA">
          JURIDICA
      </button>

      <button type="button"  id="btn_show_send-{{$solicitud->id}}"
        class="btn btn-danger btn-sm"
        onclick="enviarDirector(this);"
        data-href="{{route('solicitud.director', $solicitud->id)}}"
        data-toggle="tooltip" data-placement="top" title="ENVIAR A DIRECTOR ADMINISTRATIVO">
        DIRECTOR ADMINISTRATIVO
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
            <dd class="col-sm-8">{{$solicitud->proyecto->titulo}}</dd>

            <dt class="col-sm-4">Fechas de Realizacion:</dt>
            <dd class="col-sm-8">
                Fecha Inicio: {{$solicitud->proyecto->fecha_inicio}} -
                Fecha Final: {{$solicitud->proyecto->fecha_final}}
            </dd>

            <dt class="col-sm-4">Descripcion</dt>
            <dd class="col-sm-8">
                {{$solicitud->proyecto->descripcion}}
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
                    @foreach ($solicitud->poblaciones as $poblacion)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$poblacion->clasificacion->tipo_poblacion}}</td>
                        <td>{{$poblacion->detalle}}</td>
                        <td>{{$poblacion->pivot->numero_persona}}</td>
                     </tr>
                    @endforeach
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
          Presupuesto:
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
                    @foreach ($solicitud->proyecto->presupuestos as $presupuesto)
                     <tr>
                        <td class="text-center">{{$loop->iteration}}</td>                      
                        <td class="text-center">${{number_format($presupuesto->recurso_municipio, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->fondo_mixto, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->ministerio_cultura, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->ingreso_propio, 0)}}</td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

   
@endif
<br>
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
        @foreach ($solicitud->observaciones as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                @if ( $item->estado == 1)
                    {{ 'Aprobado' }}
                    @else
                    {{ 'Rechazado' }}
                @endif
              </td>
              <td> $ {{ number_format($item->valor, 2) }}</td>
              <td>{{ $item->pago }}</td>
              <td>{{ $item->actividades }}</td>
              <td>{{ $item->observaciones }}</td>
            </tr>
        @endforeach
       </table>
    </div>
    </div>
    <!-- /.card-body -->
  </div>
 <!-- /.card -->
</div>
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
                  <th>Observación</th>                    
              </tr>
          </thead>
          <tbody>
              @foreach ($historial as $h)
               <tr>
                  <td class="text-center">{{$loop->iteration}}</td>
                  <td class="text-center">{{ $h->descripcion }}</td>
                  <td class="text-center">{{ $h->created_at }}</td>
               </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  </div>
</div>
</div>
</div>

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
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm mejoratb">
          <thead class="thead-light">
              <tr>
                  <th>#</th>
                  <th>Documento</th>                    
                  <th>Opciones</th>                    
              </tr>
          </thead>
          <tbody>
              @foreach ($solicitus as $a)
               <tr>
                  <td class="text-center">{{$loop->iteration}}</td>
                  <td >{{ $a->tipo_documento }}</td>
                  <td >
                    <a class="btn btn-info btn-sm" target="_blank" href="{{asset('documentos/solicitudes/')}}/{{$a->solicitud_id.'/'.$a->name}}">
                  <i class="fas fa-eye"  data-toggle="tooltip" data-placement="top" title="VER"></i>
                  </a></td>
               </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  </div>
</div>



<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-text-width"></i>
      Estudio de Conveniencia:
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
                  <th>Documento</th>                    
                  <th>Opciones</th>                    
              </tr>
          </thead>
          <tbody>
              @foreach ($estudio as $a)
               <tr>
                  <td class="text-center">{{$loop->iteration}}</td>
                  <td >{{ $a->tipo_documento }}</td>
                  <td >
                    <a class="btn btn-info btn-sm" target="_blank" href="{{asset('documentos/solicitudes/')}}/{{$a->solicitud_id.'/'.$a->name}}">
                  <i class="fas fa-eye"  data-toggle="tooltip" data-placement="top" title="VER"></i>
                  </a></td>
               </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  </div>
</div>




