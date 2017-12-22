@extends('template.main')

@section('title',$publication->title)

@section('content')
	
	<div class="row  justify-content-md-center">
		<div class="card">
		  <h3 class="card-header">{{ $publication->categorie->name }}</h3>
		  <div class="card-body">
		    <h5 class="display-3">{{ $publication->title }}</h5>
		    <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6>	 -->
		    
		  </div>
		  @foreach($publication->files as $file)
		  		<img style="height: 1; width: 100%; display: block;" src="{{ asset('images/publications/'.$file->name) }}" alt="{{ $file->name }}" title="{{ $file->name }}" class="image-file">
		  @endforeach
		  <div class="card-body">
		    <p class="card-text">{!! nl2br(htmlentities($publication->publication)) !!}</p>
		  </div>
		  <div class="card-footer text-muted">
		  	<footer class="blockquote-footer">
				Publicado por: <cite title="Autor">{{ $publication->user->name }} {{ $publication->user->last_name }}. <span title="fecha de publicacion">El {{ $publication->created_at }}</span></cite>
			</footer>
		  </div>
		</div>
	</div>
	<hr>
	<div class="page-header">
		<div class="row  justify-content-md-center">
			<p class=" h1 text-uppercase">Comentarios</p>
		</div>
	</div>

		<div class="jumbotron">
				{{--  --}}
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
				
			<form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data" accept-charset="UTF-8" class="">
				{{ csrf_field() }}
			  <fieldset>
				<div class="form-group">
					<textarea name="comment" class="form-control" rows="5" required placeholder="Escribe tu opinión aquí..">{{ old('comment') }}</textarea>
					<input type="text" name="publication_id" value="{{ $publication->id }}" hidden>
				</div>
				<hr>
			    <button type="submit" class="btn btn-primary">Comentar</button>
			  </fieldset>	  
			</form>

	</div>
	<hr>
	@foreach($publication->comments as $comment)
		<div class="jumbotron">
			<blockquote class="blockquote">
			  <p>{!! nl2br(htmlentities($comment->comment)) !!}</p>
		  		<footer class="blockquote-footer">
			  		Opinión de: <cite title="Autor">{{ $comment->user->name }} {{ $comment->user->last_name }}. <span title="fecha de publicacion">Hecha el {{ $comment->created_at }}</span></cite>
				</footer>

				<hr>
			<div class="row">
				<div class="col-1"></div>

				<div class="col-11" style="border-left:1px solid white;">

						<div class="page-header">
							<div class="row  justify-content-md-center">
								<p class=" h3 text-uppercase">Respuestas</p>
							</div>
						</div>
					@foreach($comment->responses as $response)
						<div>
							<p>{!! nl2br(htmlentities($response->response)) !!}</p>
					  		<footer class="blockquote-footer">
						  		Respuesta de: <cite title="Autor">{{ $response->user->name }} {{ $response->user->last_name }}. <span title="fecha de publicacion">Hecha el {{ $response->created_at }}</span></cite>
							</footer>
						</div>
					<hr>
					@endforeach

					<form method="POST" action="{{ route('responses.store') }}" enctype="multipart/form-data" accept-charset="UTF-8">
						{{ csrf_field() }}
					  <fieldset>
						<div class="form-group">
							<textarea name="response" class="form-control" rows="4" required placeholder="Escriba su respuesta al comentario aquí..">{{ old('response') }}</textarea>
							<input type="text" name="comment_id" value="{{ $comment->id }}" hidden>
							<input type="text" name="publication_id" value="{{ $publication->id }}" hidden>
						</div>
					    <button type="submit" class="btn btn-primary">Responder</button>
					  </fieldset>	  
					</form>
				</div>
			</div>
			
			</blockquote>
		</div>
	@endforeach


@endsection