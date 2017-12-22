
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">Talento</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}"> Inicio </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes"> Categorias <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                <a class="dropdown-item" href="{{ route('home') }}">Todas</a>
                <div class="dropdown-divider"></div>
                @foreach($categories_composer as $categorie)
                  <a class="dropdown-item" href="#">{{ $categorie->name }}</a>
                @endforeach
              </div>
            </li>
            @if(Auth::user()->type=='admin')
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes"> Administrar <span class="caret"></span></a>
                  <div class="dropdown-menu" aria-labelledby="download">
                    <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
                    <a class="dropdown-item" href="{{ route('categories.index') }}">Categorias</a>
                  </div>
              </li>
            @endif
            @yield('form')
            @endauth
          </ul>
  
          {{--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
          </form>--}}

          <ul class="nav navbar-nav ml-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
            </li>
            @else           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">{{ Auth::user()->name }}<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a class="dropdown-item" href="{{ route('publications.create') }}">Publicar</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id) }}">Ver Perfil</a></li>
                <li><a class="dropdown-item" href="{{ route('profile.edit',Auth::user()->id) }}">Editar Perfil</a></li>
                <div class="dropdown-divider"></div>
                <li>
                  <a class="dropdown-item text-warning" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                </li>
              </ul>
            </li>
            @endguest
          </ul>

        </div>
      </div>
    </div>
