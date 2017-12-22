<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Talento')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Stilos de la pagina..
	================================================== -->
	@include('template.partials.style')

	@include('template.partials.otros_head')

</head>
<body>

	@include('template.partials.nav')

	@yield('carousel')
	
	@auth
		<div class="row" style="padding-top: 120px;"></div>
	@endauth
	
    <div class="container">
	
    	@include('flash::message')

		<!-- Contenido de la pagina..
		================================================== -->
		@yield('content')

		@include('template.partials.otros_body')

		<!-- Footer de la pagina..
		================================================== -->
      	@include('template.partials.footer')

    </div>

	<!-- Script's..
	================================================== -->
	@include('template.partials.script')

</body>
</html>