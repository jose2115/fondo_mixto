<table id="tabla2" class="table table-hover table-sm mejoratb">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>CC</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Direccion</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($solis as $soli)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$soli->nombre}} {{$soli->apellido}}</td>
                <td>{{$soli->cc}}</td>
                <td>{{$soli->correo_r}}</td>
                <td>{{$soli->celular_r}}</td>
                <td>{{$soli->direccion_r}}</td>

               <td class="text-center">
                    <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modalCreate2" data-id="{{$soli->id}}"   data-persona_id="{{$soli->persona_id}}"  data-proponente_id="{{$soli->proponente_id}}"
                    data-nid="{{$soli->nid}}"  data-nombre="{{$soli->nombre}}" data-apellido="{{$soli->apellido}}" data-razon_social="{{$soli->razon_social}}" data-email="{{$soli->email}}"
                    data-direccion="{{$soli->direccion}}" data-celular="{{$soli->celular}}" data-id_departamento="{{$soli->municipio->departamento->id}}" data-municipio_id="{{$soli->municipio_id}}"
                    data-representante_legal="{{$soli->cc}}" data-id_departamento2="{{$soli->municipio->departamento->id}}" data-municipio_id_r="{{$soli->municipio_r}}" data-direccion_r="{{$soli->direccion_r}}"
                    data-celular_r="{{$soli->celular_r}}" data-direccion_r="{{$soli->direccion_r}}" data-correo_r="{{$soli->correo_r}}" > <i class="fas fa-pencil-alt" data-toggle="tooltip" data-placement="top" title="EDITAR"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

