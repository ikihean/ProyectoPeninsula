@extends('layout')

@section('content')
<div class="container-fluid">
	<h3><span class="label label-primary">Restablecer Contraseña</span></h3>
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

	<form class="form-signin" role="form" method="POST" action="/password/reset">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="token" value="{{ $token }}">

		<div> <label class="sr-only">Correo Electronico</label>
			<input type="number" 
				   placeholder="Numero de Cedula"
				   class="form-control" 
				   name="number_ci" 
				   value="{{ old('number_ci') }}">
		</div>

		<div>
			<label class="sr-only">Contraseña</label>
				<input type="password"
					   placeholder="Contraseña"
					   class="form-control" 
					   name="password">
		</div>
				
		<div>
			<label class="sr-only">Confirme Contraseña</label>
				<input type="password"
					   placeholder="Confirme Contraseña"
					   class="form-control" 
					   name="password_confirmation">
		</div>
		<br>  
		<div class="button">
			<button type="submit" 
                                class="btn btn-lg btn-primary btn-block">
				Restablecer
			</button>
			</div>
		</div>
	</form>
</div>
@endsection
