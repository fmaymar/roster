@extends('panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">ESCUADRONES</div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                    @endif
                    <div class="panel-body">
                        <p>
                            <a href="{{route('admin.squadrons.create')}}" class="btn btn-info">Crear Escuadrón</a>
                        </p>
                        @include('admin.squadrons.partials.table')
                        {!! $squadrons->render() !!}
                    </div>
                </div>
                <a href="{{route('admin')}}" class="btn btn-default">Volver</a>
            </div>
        </div>
    </div>


@endsection