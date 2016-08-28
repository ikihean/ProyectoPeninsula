@extends('layout')

@section('content')
<div class="container-fluid">
	<h3><span class="label label-primary">Registrar Usuario</span></h3>
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
							 
	{!! Form::open(['route' => 'registrar', 'class' => 'form-signin', 'role' => 'form']) !!}	
	
		<div><label class="sr-only">Nombre</label> 
			<input placeholder="Nombre" 
					class="form-control" 
					name="nombre" 
					type="text" 
					value="{{ old('nombre') }}">			
		</div>
										
		<div><label class="sr-only">Apellido</label> 
			<input placeholder="Apellido" 
				   class="form-control" 
				   name="apellido" 
				   type="text" 
				   value="{{ old('apellido') }}">			
		</div>
				
        <div> <label for="tipo_ci" class="sr-only">Tipo Cedula</label> 
			<select required name="tipo_ci" class="form-control" id="sel11">
				<option value="">Tipo de Cedula</option>
				<option value="Venezolano">Venezolano</option>
				<option value="Extranjero">Extranjero</option>
				<option value="Menor">Menor sin Cedula</option>
			</select>
                            <script>
                                        document.getElementById('sel11').addEventListener('change', function() {
                                    if (this.value === 'Menor') {
                                        document.getElementById('numcedula').disabled = true;
                                    } else {
                                        document.getElementById('numcedula').disabled = false;
                                    }
                                });
                            </script>
                
                            <script>
                                        document.getElementById('sel11').addEventListener('change', function() {
                                    if (this.value === 'Menor') {
                                        document.getElementById('myCheck').checked = true;
                                    } else {
                                        document.getElementById('myCheck').checked = false;
                                    }
                                });
                            </script>
                
		</div>
	
		<div> <label class="sr-only">Numero Cedula</label> 
			<input placeholder="Numero de Cedula" 
				   name="number_ci" 
				   class="form-control" 
				   type="number"
                                   disabled="false"
                                   id="numcedula"
				   value="{{ old('number_ci') }}">
                        
                        <label class="sr-only">Cedula Checkbox
                        <input type="checkbox" 
                               name="number_ci" 
                               id="myCheck" 
                               value="{{ bcrypt('number_ci') }}" 
                               style="opacity:0; position:absolute; left:9999px;">
                        </label>
                </div>

		<div> <label class="sr-only">Genero</label> 
			<select name="genero" class="form-control" id="sel1">
				<option value="">Genero</option>
				<option value="femenino">Femenino</option>
				<option value="masculino">Masculino</option>
			</select>
		</div>

		<div> <label class="sr-only">Fecha Nacimiento</label> 
			<input placeholder="Fecha de Nacimiento" 
				   name="fecha_nacimiento" 
				   class="form-control" 
				   type="date"
				   value="{{ old('fecha_nacimiento') }}">
		</div>
										
		<div> <label class="sr-only">Correo Electronico</label>
			<input type="email" 
				   placeholder="Correo Electronico"
				   class="form-control" 
				   name="email" 
				   value="{{ old('email') }}">
		</div>

		<div> <label class="sr-only">Telefono Fijo</label> 
			<input placeholder="Teléfono Fijo" 
				   name="telf_casa" 
				   class="form-control" 
				   type="number"
				   value="{{ old('telf_casa') }}"> 
		</div>

		<div> <label class="sr-only">Telefono Movil</label> 
			<input placeholder="Teléfono Móvil" 
				   class="form-control" 
				   name="telf_movil" 
				   type="number"
				   value="{{ old('telf_movil') }}"> 
		</div>

                 <div> <label class="sr-only">Telefono de Trabajo</label> 
			<input placeholder="Teléfono de Trabajo" 
				   class="form-control" 
				   name="telf_trabajo" 
				   type="number"
				   value="{{ old('telf_trabajo') }}"> 
		</div>
        
		<div> <label class="sr-only">Profesion</label> 
				<input placeholder="Profesión u Oficio" 
					   name="profesion" 
					   class="form-control" 
					   type="text"
					   value="{{ old('profesion') }}">
		</div>

		<div> <label class="sr-only">Numero de Habitantes</label> 
				<input placeholder="Número de Habitantes" 
					   name="habitantes_casa" 
					   class="form-control" 
					   type="number"
					   value="{{ old('habitantes_casa') }}"> 
		</div>

		<div> <label class="sr-only">Tipo de Usuario</label> 
				<select name="tipo_usuario" class="form-control" id="sel1">
					<option value="">Tipo de Usuario</option>
					<option value="administrador">Administrador</option>
					<option value="principal">Usuario</option>
    				</select>
		</div>
		
		<div> <label class="sr-only">Edificio</label> 
				<input placeholder="Edificio" 
					   name="lugar_edificio" 
					   class="form-control" 
					   type="text"
					   value="{{ old('lugar_edificio') }}">
		</div>
										
		<div> <label class="sr-only">Apartamento</label> 
				<input placeholder="Apartamento" 
					   name="lugar_apartamento" 
					   class="form-control" 
					   type="text"
					   value="{{ old('lugar_apartamento') }}">
		</div>
										
		<div>
			<label class="sr-only">Contraseña</label>
				<input type="password"
                                       id="password1"
					   placeholder="Contraseña"
					   class="form-control" 
					   name="password">
		</div>
				
		<div>
			<label class="sr-only">Confirme Contraseña</label>
				<input type="password"
                                       id="password2"
					   placeholder="Confirme Contraseña"
					   class="form-control" 
					   name="password_confirmation">
		</div>
		<br>  
		<div class="button">
			<button type="submit" 
					class="btn btn-lg btn-primary btn-block">
				Registrar
			</button>
		</div>
	{!! Form::close() !!}
</div>
@endsection
