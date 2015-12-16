@extends('panel')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Principal</div>

				<div class="panel-body">
					<h2>Bienvenido al Roster del Escuadrón 111.</h2>
					<p>Actualmente hay {{$squadrons}} escuadrones activos y {{$users}} pilotos registrados</p>

					@if(Auth::user())
						<p>Eres {{Auth::user()->profile->callsign}}</p>
					@endif

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
