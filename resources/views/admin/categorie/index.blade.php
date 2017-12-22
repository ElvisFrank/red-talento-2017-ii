@extends('template.main')

@section('title','Categorias')

@section('content')

<div class="page-header">
	<div class="row justify-content-md-center">
		<h1>Categorias</h1>
	</div>
	<p>
		<a class="btn btn-outline-primary" href="{{ route('categories.create') }}">Agregar Categorias</a>
    </p>
</div>
	<table class="table table-striped table-hover table-bordered">
	  <thead class="thead-dark">
	    <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Description</th>
            <th>Imagen</th>
            <th>Opcion</th>
          </tr>
        </thead>
        <tbody>
        	@foreach($categories as $categorie)
	          	<tr>
		            <td>{{ $categorie->id }}</td>
		            <td>{{ $categorie->name }}</td>
		            <td>{{ $categorie->description }}</td>
		            <td>{{ $categorie->image }}</td>
		            <td>
						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						  <button type="button" class="btn btn-outline-success">Acción</button>
						  <div class="btn-group" role="group">
						    <button id="btnGroupDrop3" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
						    <div class="dropdown-menu" aria-labelledby="btnGroupDrop3" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
						      <a class="dropdown-item" href="{{ route('categories.edit',$categorie->id) }}">Editar</a>
						      <a class="dropdown-item" href="{{ route('categories.destroy',$categorie->id) }}" onclick="return confirm('Seguro que desea Eliminar?')">Eliminar</a>
						    </div>
						  </div>
						</div>
		            </td>
			    </tr>
        	@endforeach
	  </tbody>
	</table>

		<div id="render_personalizacionxxz">
  			{!! $categories->render() !!}
  		</div>

@endsection