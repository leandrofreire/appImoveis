<nav>
  <div class="nav-wrapper blue">
    <div class="container">
      <a href="{{ route('site.home') }}" class="brand-logo">4Mechanic</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <!--Desktop-->
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('site.home') }}">Home</a></li>
        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>
      </ul>
      <!--Mobile-->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('site.home') }}">Home</a></li>
        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>
