@extends('panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Principal</div>

                    <div class="panel-body">
                        <h2>Bienvenido, {{Auth::user()->profile->callsign}}.</h2>

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#datos" aria-controls="datos" role="tab" data-toggle="tab">Datos</a></li>
                            <li role="presentation"><a href="#seguridad" aria-controls="seguridad" role="tab" data-toggle="tab">Seguridad</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="datos">
                                Pestaña de Datos
                            </div>
                            <div role="tabpanel" class="tab-pane" id="seguridad">
                                Pestaña de seguridad
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection