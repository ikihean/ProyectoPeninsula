<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conjunto Residencial La Peninsula</title>
        
        <!-- Bootstrap core CSS -->
	{!! Html::style('assets/css/bootstrap.css') !!}
        
        <!-- Custom styles for this template -->
        {!! Html::style('assets/css/signin.css') !!}
                
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                                    <li><a href="{{route('home')}}">Elemento 01</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
                                    @if (Auth::guest())
                                        <li class="active"><a href="{{route('acceder')}}">Acceder</a></li>
                                    @else
						
                                        <li><p class="navbar-text">{{ Auth::user()->NombreCompleto }}</p></li>
                                        <li role="presentation" class="active"><a href="{{ route('salir') }}">Salir</a></li>
                                        <li role="presentation" class="active"><a href="{{route('registrar')}}">Registrar Usuario</a></li>
                                    @endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	{!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>