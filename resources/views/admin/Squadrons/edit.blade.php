@extends('panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Escuadrón</div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                    @endif
                    <div class="panel-body">
                        {!! Form::model($squadron,['route'=>['admin.squadrons.update',$squadron],
                                                   'method'=>'PATCH',
                                                   'novalidate'=>'novalidate',
                                                   'files'=>true]) !!}
                        @include('admin.squadrons.partials.fields')
                        <button type="submit" class="btn btn-default">Actualizar Escuadrón </button>
                        {!! Form::close() !!}

                    </div>
                </div>
                <div class="pull-left">
                <a href="{{route('admin.squadrons.index')}}" class="btn btn-default">Volver</a>
                </div>
                <div class="pull-right">
                {!! Form::open(['route'=>['admin.squadrons.destroy',$squadron], 'method'=>'DELETE']) !!}
                <button type="submit" onClick="return confirm('seguro que dese eliminar?')" class="btn btn-danger">Eliminar Escuadrón</button>
                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>


@endsection