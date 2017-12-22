@extends('template.main')

@section('title','Inicio')

@section('carousel')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="images/talentoblack.jpg" alt="Musica">
      <div class="carousel-caption d-none d-md-block">
        <h1>Red de talentos</h1>
        <em class="h2">"Así como el ignorante está muerto antes de morir, el hombre de talento vive aun después de muerto."</em>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/musica.jpg" alt="Musica">
      <div class="carousel-caption d-none d-md-block">
        <h3>Musica</h3>
        <p>Es más fácil sentirla y reproducirla que explicarla o definirla. Todos entendemos qué es la música, pero ¿cuántos pueden poner en palabras cuáles son sus características esenciales o aquello que le da sentido?</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/arquitectura.jpg" alt="Aquitectura">
      <div class="carousel-caption d-none d-md-block">
      	<h3 style="color: white;">Aquitectura</h3>
      	<p style="color: white;">Los arquitectos no sólo se encargan de desarrollar construcciones en función de su forma y utilidad, sino que también siguen preceptos estéticos. Por eso, la arquitectura suele ser considerada como una de las bellas artes.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pintura.jpg" alt="Pintura">
      <div class="carousel-caption d-none d-md-block">
      	<h3 style="color: #212F3C; background-color: rgba(255,255,255,0.25);">Pintura</h3>
      	<p style="color: #212F3C; background-color: rgba(255,255,255,0.25);">La pintura artística es considerada una de las bellas artes, entendida como representación gráfica a partir de la utilización de pigmentos y/u otras sustancias para la creación de una obra visual.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/escultura.jpg" alt="Escultura">
      <div class="carousel-caption d-none d-md-block">
      	<h3 style="color: #212F3C; background-color: rgba(255,255,255,0.25);">Escultura</h3>
      	<p style="color: #212F3C; background-color: rgba(255,255,255,0.25);">Se llama escultura (del latín sculptūra) al arte de modelar el barro, tallar en piedra, madera u otros materiales. También se denomina escultura a la obra elaborada por un escultor.​. Es una de las Bellas Artes en la cual el escultor se expresa creando volúmenes y conformando espacios.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/poesia.jpg" alt="Poesia">
      <div class="carousel-caption d-none d-md-block">
      	<h3 style="color: white;">Poesia</h3>
      	<p style="color: white;">Es más fácil sentirla y reproducirla que explicarla o definirla. Todos entendemos qué es la música, pero ¿cuántos pueden poner en palabras cuáles son sus características esenciales o aquello que le da sentido?</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('js')
<script type="text/javascript">
  $('.carousel').carousel({
  interval: 2050
})
</script>
@endsection
