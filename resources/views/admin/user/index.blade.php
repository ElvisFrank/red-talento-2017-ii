@extends('template.main')

@section('title','Usuarios')

@section('content')

<div class="page-header">
	<div class="row justify-content-md-center">
		<h1>Usuarios</h1>
	</div>
	<p>
		<a class="btn btn-outline-primary" href="{{ route('users.create') }}">Agregar Usuarios</a>
    </p>
</div>
	<table class="table table-striped table-hover table-bordered">
	  <thead class="thead-dark">
	    <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Opcion</th>
          </tr>
        </thead>
        <tbody>
        	@foreach($users as $user)
	          	<tr>
		            <td>{{ $user->id }}</td>
		            <td>{{ $user->name }}</td>
		            <td>{{ $user->last_name }}</td>
		            <td>{{ $user->email }}</td>
		            <td>{{ $user->type }}</td>
		            <td>
						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						  <button type="button" class="btn btn-outline-success">Acción</button>
						  <div class="btn-group" role="group">
						    <button id="btnGroupDrop3" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
						    <div class="dropdown-menu" aria-labelledby="btnGroupDrop3" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
						      <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}">Editar</a>
						      <a class="dropdown-item" href="{{ route('users.destroy',$user->id) }}" onclick="return confirm('Seguro que desea Eliminar?')">Eliminar</a>
						    </div>
						  </div>
						</div>
		            </td>
			    </tr>
        	@endforeach
	  </tbody>
	</table> 
		<div id="render_personalizacionxxz">
  			{!! $users->render() !!}
  		</div>
@endsection