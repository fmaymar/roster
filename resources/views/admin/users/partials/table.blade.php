<table class="table table-hover">
    <tr>
        <th></th>
        <th>Callsign</th>
        <th>Escuadrón</th>
        <th>Estado</th>
        <!-- <th>Descripción</th>
        <th>Descripción Interna</th>
        <th>Observaciones</th>-->
        <th>Opciones</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td><image src="{{$user->profile->sign}}" width="60" height="60" class="img-circle"></image></td>
            <td>{{$user->profile->callsign}}</td>
            <td>{{$user->profile->squadron->squadron}}</td>
            <td>{{$user->profile->userState->state}}</td>
            <td>
                <a href="" class="btn btn-info">Ver</a>
                <a href="" class="btn btn-warning">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>