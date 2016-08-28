@extends('layout')

@section('content')
<div class="container-fluid">
	<h3><span class="label label-primary">Usuarios Registrados en el Sistema</span></h3>
        
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Cedula</th>
                <th>Genero</th>
                <th>Edad</th>
                <th>Correo Electrónico</th>
                <th>Números de Contacto</th>
                <th>Profesion u Oficio</th>
                <th>Numero habitantes en casa</th>
                <th>Tipo de Usuario</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
            </thead>
            @foreach ($users as $user)
            <tbody>
            <tr>
                <th>{{ $user->nombrecompleto }}</th>
                <th>@if ($user->tipo_ci === 'Menor')
                        {{ $user->tipo_ci }}
                    @elseif ($user->tipo_ci === 'Venezolano')
                        {{ str_replace('enezolano', '-', $user->cedula) }}
                    @else ($user->tipo_ci === 'Extranjero')
                        {{ str_replace('xtranjero', '-', $user->cedula) }}
                @endif</th>
                <th>{{ $user->genero }}</th>
                <th>{{ $user->edad }}</th>
                <th>{{ $user->email }}</th>
                <th>{!! 'Casa: ' . $user->telf_casa . '<br>Movil: ' . $user->telf_movil . '<br>Trabajo: ' . $user->telf_trabajo !!}</th>
                <th>{{ $user->profesion }}</th>
                <th>{{ $user->habitantes_casa }}</th>
                <th>{{ $user->tipo_usuario }}</th>
                <th>{{ $user->direccion }}</th>
                <th><a href=""><span class="badge">Editar</span></a><br><br>
                    <a href=""><span class="badge">Eliminar</span></a>
                </th>
            </tr>
            </tbody>
            @endforeach
        
</div>
@endsection