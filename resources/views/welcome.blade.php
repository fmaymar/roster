<html>
	<head>
		<title>Laravel</title>

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>


		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
			}

			.quote2 {
				font-size: 48px;
				margin-bottom: 20px;
			}
			.quote {
				font-size: 24px;
				margin-bottom: 40px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">ROSTER</div>
				<div class="quote2">ALA FALCON</div>
				<div class="quote">ESCUADRÓN 111</div>
				<a href="{{route('home')}}" class="btn btn-default btn-lg btn-block">Entrar</a>
				<a href="home" class="btn btn-default btn-lg btn-block">Entrar</a>
				{!!  link_to_route('home', 'Entrar', array(), array('class' => 'btn btn-default btn-lg btn-block'))  !!}
			</div>
		</div>
	</body>
</html>
