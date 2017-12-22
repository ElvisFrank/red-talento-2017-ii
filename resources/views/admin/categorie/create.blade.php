@extends('template.main')

@section('title','Crear categoria')

@section('content')

<div class="page-header">
	<div class="row  justify-content-md-center">
		<h1>Crear categoria</h1>
	</div>
</div>

<div class="row justify-content-md-center">
	<div class="col-lg-7">
		
	<form method="POST" action="{{ route('categories.store') }}">
		{{ csrf_field() }}
	  <fieldset>
	    <legend>Ingrese la informacion requerida</legend>

		<div class="form-group">
			<label  class="col-form-label">Nombre <small class="text-muted">(*)</small></label>
			<input name="name" type="text" class="form-control" required>			
		</div>

		<div class="form-group">
			<label  class="col-form-label">Descripcion</label>
			<textarea name="description" class="form-control" rows="4"></textarea>
		</div>
		<hr>
		<div class="form-group">
			<small class="form-text text-muted">(*) Campo obligatorio.</small>
		</div>
	    <button type="submit" class="btn btn-primary">Agregar</button>
	  </fieldset>
	</form>

	</div>
</div>

@endsection