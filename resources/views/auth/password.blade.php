@extends('layout')

@section('content')
<div class="container-fluid">
	<h3><span class="label label-primary">Activar Cuenta</span></h3>
	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Por favor corrija los siguientes errores</strong><br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form class="form-signin" role="form" method="POST" action="/password/email">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div> <label class="sr-only">Numero de Cedula</label>
			<input type="number" 
				   placeholder="Ingrese Numero de Cedula"
				   class="form-control" 
				   name="number_ci" 
				   value="{{ old('number_ci') }}">
		</div>

		<div class="button">
			<button type="submit" 
                                class="btn btn-lg btn-primary btn-block">
				Enviar
			</button>
                    <br>
		<a href="{{ route('home') }}"><span class="label label-default">
			No poseo Correo Electrónico Registrado
			</span></a>
		</div>
	</form>
</div>
@endsection
