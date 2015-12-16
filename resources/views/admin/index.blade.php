@extends('panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Panel de Administración</div>
                    <div class="panel-body">
                        {!!  link_to_route('admin.squadrons.index', 'Gestión de Escuadrones', array(), array('class' => 'btn btn-default btn-lg btn-block'))  !!}
                        {!!  link_to_route('admin.users.index', 'Gestión de Pilotos', array(), array('class' => 'btn btn-default btn-lg btn-block'))  !!}
                        {!!  link_to_route('home', 'Gestión de Estados de Piloto', array(), array('class' => 'btn btn-default btn-lg btn-block'))  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
