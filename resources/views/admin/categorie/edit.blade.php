@extends('template.main')

@section('title','Editar categoria')

@section('content')

<div class="page-header">
	<div class="row  justify-content-md-center">
		<h1>Editar categoria</h1>
	</div>
</div>

<div class="row justify-content-md-center">
	<div class="col-lg-7">
		
	{!! Form::open(['route'=>['categories.update',$categorie],'method'=>'PUT']) !!}
	  <fieldset>
	    <legend>Ingrese la informacion requerida</legend>

		<div class="form-group">
			<label  class="col-form-label">Nombre <small class="text-muted">(*)</small></label>
			<input name="name" type="text" class="form-control" value="{{ $categorie->name }}" required>			
		</div>

		<div class="form-group">
			<label  class="col-form-label">Descripcion</label>
			<textarea name="description" class="form-control" rows="4">{{ $categorie->description }}</textarea>
		</div>
		<div class="form-group">
			<small class="form-text text-muted">(*) Campo obligatorio.</small>
		</div>
		
	    <button type="submit" class="btn btn-primary">Modificar</button>

	  </fieldset>
	{!! Form::close() !!}

	</div>
</div>

@endsection