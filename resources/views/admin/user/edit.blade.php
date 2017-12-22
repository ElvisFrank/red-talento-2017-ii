@extends('template.main')

@section('title','Editar usuario')

@section('content')

<div class="page-header">
	<div class="row  justify-content-md-center">
		<h1>Editar usuario</h1>
	</div>
</div>

<div class="row justify-content-md-center">
	<div class="col-lg-7">
		
	{!! Form::open(['route'=>['users.update',$user],'method'=>'PUT']) !!}
	  <fieldset>
	    <legend>Ingrese la informacion requerida</legend>

		<div class="form-group">
			<label  class="col-form-label">Nombre</label>
			<input name="name" type="text" class="form-control" value="{{ $user->name }}" required>			
		</div>

		<div class="form-group">
			<label  class="col-form-label">Apellidos</label>
			<input name="last_name" type="text" class="form-control" value="{{ $user->last_name }}" required>
		</div>

		<div class="form-group">
			<label  class="col-form-label">Correo</label>
			<input name="email" type="email" class="form-control"  value="{{ $user->email }}" required placeholder="example@email.com">
		</div>
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label  class="col-form-label">Contraseña</label>
					<input name="password" type="password" class="form-control" placeholder="*******" required>
				</div>
			</div>
			<div class="col-6">
			    <div class="form-group">
					<label  class="col-form-label">Tipo de usuario</label>
					<select class="form-control" name="type">
						@if($user->type=="member")
							<option value="member" selected>Miembro</option>
							<option value="admin">Admin</option>
						@else
							<option value="member">Miembro</option>
							<option value="admin" selected>Admin</option>	
						@endif
					</select>
	   		 	</div>
			</div>
		</div>
		<div class="form-group">
			<small class="form-text text-muted">(*) Todos los campos son requeridos.</small>
		</div>		
	    <button type="submit" class="btn btn-primary">Modificar</button>
	  </fieldset>
	{!! Form::close() !!}

	</div>
</div>

@endsection