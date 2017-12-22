@extends('template.main')

@section('title','Inicio')

@section('form')
	<form class="form-inline my-2 my-lg-0" action="{{ route('home') }}" method="GET">
		<input class="form-control mr-sm-2" type="text" placeholder="Search" name="title">
		<button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
	</form>
@endsection
@section('content')

	<div class="page-header" id="banner">
		<div class="row">
		  <div class="col-lg-8 col-md-7 col-sm-6">
		    <h1>Red de talentos</h1>
		    <p class="lead">Así como el ignorante está muerto antes de morir, el hombre de talento vive aun después de muerto.</p>
		  </div>
		  <div class="col-lg-4 col-md-5 col-sm-6">

		  </div>
		</div>
	</div>
	
	<div class="row">
		@foreach($publications as $publication)
		<div class="col-lg-6">
			@include('template.partials.publication')
		</div>
		@endforeach
	</div>
		<div id="render_personalizacionxxz">
  			{!! $publications->render() !!}
  		</div>

@endsection