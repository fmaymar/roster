@extends('panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Escuadrón</div>
                    <div class="panel-body">
                        @include('admin.partials.messages')
                        {!! Form::open(['route'=>'admin.squadrons.store',
                                        'method'=>'POST',
                                        'novalidate'=>'novalidate',
                                        'files'=>true])!!}
                        @include('admin.squadrons.partials.fields')
                        <button type="submit" class="btn btn-default">Crear Escuadrón </button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <a href="{{URL::previous()}}" class="btn btn-default">Volver</a>
            </div>
        </div>
    </div>


@endsection