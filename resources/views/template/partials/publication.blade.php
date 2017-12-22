<a class="h1 btn-link" href="{{ route('profile.show',$publication->user->id) }}">{{ $publication->user->name }}</a>
<div class="jumbotron">
	<h3>{{ $publication->title }}</h3>

	<p>{!! substr(nl2br(htmlentities($publication->publication)),0,320) !!}@if(strlen($publication->publication)>320)<span> ...</span>@endif</p>
	<br>

	@foreach($publication->files as $file)
		<img style="height: 1; width: 100%; display: block;" src="{{ asset('images/publications/'.$file->name) }}" alt="{{ $file->name }}" title="{{ $file->name }}" class="image-file">
	@endforeach
	<hr>

	<div class="row justify-content-end">
		<div>
			<p>
				<a class="btn btn-link" href="{{ route('publications.show',$publication->id) }}">Ver publicacion completa</a>
			</p>
		</div>
	</div>
</div>