@extends('panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">PILOTOS</div>
                    <div class="panel-body">
                        @include('admin.users.partials.table')
                        <a href="{{URL::previous()}}" class="btn btn-default">Volver</a>
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection