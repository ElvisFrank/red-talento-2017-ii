@extends('template.main')

@section('content')

	<div class="row">
		<div class="col-lg-5">
			@include('template.partials.profile')
		</div>
		<div class="col-lg-7">
			@foreach($publications as $publication)
				<div class="row">
					@include('template.partials.publication')
				</div>
			@endforeach			
			<div id="render_personalizacionxxz">
	  			{!! $publications->render() !!}
	  		</div>
		</div>
	</div>
@endsection