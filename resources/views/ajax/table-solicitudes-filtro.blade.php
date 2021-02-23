<table id="tabla" class="display table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Radicado</th>
                <th>Categoria</th>
                <th>Solicitante</th>
                <th>Descripción</th>                
                <th style="width: 8%">Fecha de Registro</th>                
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($solicitudes as $solicitud)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$solicitud->radicado}}</td>
            <td>{{$solicitud->categoria->tipo_solicitud}}</td>
            <td>
                @if ($solicitud->solicitante->razon_social)
                {{$solicitud->solicitante->razon_social}}
                @else
                {{$solicitud->solicitante->nombre}} {{$solicitud->solicitante->apellido}}
                @endif
            </td>
            <td>{{$solicitud->descripcion}}</td>            
            <td style="width: 8%">{{$solicitud->fecha}}</td>            
            <td class="text-center">
                <button type="button" id="btn_show_detail-{{$solicitud->id}}" class="btn btn-info btn-sm show-details" data-toggle="modal" data-href="{{route('solicitud2.show', $solicitud->id)}}" data-target="#modalShow"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="VER DETALLE"></i></button>
           </td>
        </tr>

        @endforeach

    </tbody>
</table>
