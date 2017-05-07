<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h3 align="center">Contato</h3>
  </div>

  <div class="divider"></div>
  <div class="row section">
    <div class="col s12 m6">
      @if(isset($pagina->mapa))
        <div class="video-container">
          {!! $pagina->mapa !!}
        </div>
      @else
        <img class="responsive-img" src="{{ asset($pagina->imagem) }}" alt="Imagem" />
      @endif
    </div>
    <div class="col s12 m6">
      <h4>{{ $pagina->titulo }}</h4>
      <blockquote>
        {{ $pagina->descricao }}
      </blockquote>
      <form class="col s12" action="{{ route('site.contato.enviar') }}" method="post">
        {{ csrf_field() }}
        <div class="input-field">
          <input type="text" name="nome" class="validate" value="">
          <label for="">Nome</label>
        </div>
        <div class="input-field">
          <input type="text" name="email" class="validate" value="">
          <label for="">Email</label>
        </div>
        <div class="input-field">
          <textarea name="mensagem" class="materialize-textarea"></textarea>
          <label for="">Mensagem</label>
        </div>
        <button class="btn blue">Enviar</button>
      </form>
  </div>
</div>
@endsection
