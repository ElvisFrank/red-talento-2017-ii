@extends('template.main')

@section('content')
	
<div class="page-header">
	<div class="row  justify-content-md-center">
		<h1>Crear publicacion</h1>
	</div>
</div>

<div class="row justify-content-md-center">

	<div class="col-lg-7">
		@if(count($errors)>0)
			<div class="card text-white bg-danger">
			  <div class="card-body">
			    <blockquote class="card-blockquote">
			      <ul>
			      	@foreach($errors->all() as $error)
			      		<li>{{ $error }}</li>
		      		@endforeach
			      </ul>
			    </blockquote>
			  </div>
			</div>
		@endif
		
	<form method="POST" action="{{ route('publications.store') }}" enctype="multipart/form-data" accept-charset="UTF-8">
		{{ csrf_field() }}
	  <fieldset>
	    <legend>Ingrese la informacion requerida</legend>

		<div class="form-group">
			<label  class="col-form-label">Titulo <small class="text-muted">(*)</small></label>
			<input name="title" type="text" class="form-control" required value="{{ old('title') }}">			
		</div>

		<div class="form-group">
			<label  class="col-form-label">Descripcion</label>
			<textarea name="publication" class="form-control" rows="5">{{ old('publication') }}</textarea>
		</div>

		<div class="form-group">
			<label class="col-form-label">Seleccione la categoria de su publicacion <small class="text-muted">(*)</small></label>
			<select name="categorie_id" class="form-control form-control-chosen-required">
				@foreach($categories as $categorie)
					@if ($categorie->id==old('categorie_id')) 
						<option value="{{ $categorie->id }}" selected>{{ $categorie->name }}</option>
					@else
						<option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
					@endif
				@endforeach
			</select>
		</div>

	    <div class="form-group">
	      <label for="exampleInputFile">Agrege una imagen</label>
	      <input name="file" type="file" class="form-control-file" aria-describedby="fileHelp" value="{{ old('file') }}">
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

@section('js')

	<script type="text/javascript">

		  $('.form-control-chosen-required').chosen({
		  	allow_single_deselect: false
		  });

	</script>

@endsection