<div class="" style="background-image: linear-gradient(to top, #09203f 0%, #537895 100%); border-radius: 2%;border-right: 2px solid  rgba(250,250,250,0.4);border-bottom: 2px solid  rgba(250,250,250,0.4);">
	<div class="container" style="border-radius: 10px 10px 10px 0px; border-left: 2px solid rgba(250,250,250,0.1)">
		<img class="photo-profile" src="{{ asset($user->photo)}}">
	</div>
	<div class="container" style="border-radius: 0px 10px 0px 10px ;border-top: 2px solid  rgba(250,250,250,0.02);border-left: 2px solid rgba(250,250,250,0.15)">
		<p class="text-uppercase text-primary">
			Nombre: <b class="text-white"> {{ $user->name }} </b>
			<br>
			Apellido: <b class="text-white"> {{ $user->last_name }} </b>
		</p>
	</div>

	<div class="container" style="border-radius: 10px 10px 10px 0px ;border-top: 2px solid  rgba(250,250,250,0.05);border-left: 2px solid rgba(250,250,250,0.15)">
		<p class="text-justify"><br>{{ $user->presentation }}<br><br></p>
	</div>
	
</div>