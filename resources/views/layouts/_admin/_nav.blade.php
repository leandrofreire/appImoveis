<nav>
  <div class="nav-wrapper blue">
    <div class="container">
      <a href="{{ route('admin.principal') }}" class="brand-logo">Administrativo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <!--Desktop-->
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('admin.principal') }}">Inicio</a></li>
        <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
        @if(Auth::guest())
          <li><a href="{{ route('admin.login') }}">Login</a></li>
          @else
          <li>
            <a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}
              <i class="material-icons right">arrow_drop_down</i>
            </a></li>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">{{ Auth::user()->name }}</a></li>
            <li><a href="{{ route('admin.cidades') }}">Cidades</a></li>
            <li><a href="{{ route('admin.oficinas') }}">Oficinas</a></li>
            <li><a href="{{ route('admin.tipos') }}">Tipos</a></li>
            <li><a href="{{ route('admin.slides') }}">Slides</a></li>
            @can('usuario_listar')
            <li><a href="{{ route('admin.usuarios') }}">Usuarios</a></li>
            @endcan
            @can('papel_listar')
            <li><a href="{{ route('admin.papel') }}">Papel</a></li>
            @endcan
            <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
          </ul>
          <li><a href="{{ route('admin.sair') }}">Sair</a></li>
        @endif
      </ul>
      <!--Mobile-->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('admin.principal') }}">Inicio</a></li>
        <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
        @if(Auth::guest())
          <li><a href="{{ route('admin.login') }}">Login</a></li>
          @else
          <li><a href="#">{{ Auth::user()->name }}</a></li>
          <li><a href="{{ route('admin.cidades') }}">Cidades</a></li>
          <li><a href="{{ route('admin.oficinas') }}">Oficinas</a></li>
          <li><a href="{{ route('admin.tipos') }}">Tipos</a></li>
          <li><a href="{{ route('admin.slides') }}">Slides</a></li>
          <li><a href="{{ route('admin.usuarios') }}">Usuarios</a></li>
          <li><a href="{{ route('admin.papel') }}">Papel</a></li>
          <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
          <li><a href="{{ route('admin.sair') }}">Sair</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
