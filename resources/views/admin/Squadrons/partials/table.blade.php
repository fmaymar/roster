<table class="table table-hover">
    <tr>
        <th></th>
        <th></th>
        <th>Escuadrón</th>
        <th>Pais</th>
        <th>Web</th>
        <th>Pilotos</th>
        <th>Opciones</th>

    </tr>
    @foreach ($squadrons as $squadron)
        <tr>
            <td>{{$squadron->id}}</td>
            <td><image src="/images/squadrons/{{$squadron->logo}}" width="60" height="60"></image></td>
            <td>{{$squadron->squadron}}</td>
            <td>{{$squadron->country}}</td>
            <td><a href="{{$squadron->web}}">{{$squadron->web}}</a></td>
            <td>{{$squadron->profile()->count()}}</td>
            <td>
                <a href="{{route('admin.squadrons.edit',$squadron->id)}}" class="btn btn-warning">Editar</a>
            </td>
        </tr>
    @endforeach
</table>