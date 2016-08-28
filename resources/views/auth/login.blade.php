@extends('layout')

@section('content')
<div class="container-fluid">
	<h3><span class="label label-primary">Acceder a su cuenta</span></h3>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Por favor corrija los siguientes errores:</strong><br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	
		
	{!! Form::open(['route' => 'acceder', 'class' => 'form-signin', 'role' => 'form']) !!}	

		<div>
		{!! Form::label('number_ci', 'Ingrese Numero de Cedula', ['class' => 'sr-only']) !!}
		{!! Form::text('number_ci', null, [
				'placeholder' => trans('validation.attributes.number'), 
				'class' => 'form-control', 
				'type' => 'number']) !!}
		
		</div>

		<div>
		{!! Form::label('password', 'Ingrese Contraseña', ['class' => 'sr-only']) !!}
		
		{!! Form::password('password', ['class' => 'form-control', 
				'placeholder' => trans('validation.attributes.password')]) !!}
		
		</div>

		<br>  

		<div class="button">
			<button type="submit" class="btn btn-lg btn-primary btn-block">
				Acceder
			</button>
		<br>
		<a href="password/email"><span class="label label-default">
			Obtener Contraseña
			</span></a>
		</div>
	{!! Form::close() !!}
</div>
@endsection
