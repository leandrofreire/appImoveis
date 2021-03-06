<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h4 align="center">{{ $oficina->titulo }}</h4>
    <div class="divider"></div>
  </div>

  <div class="row section">
    <div class="col s12 m8">
      @if($oficina->galeria()->count())
      <div class="row">
        <div class="slider">
          <ul class="slides">
            @foreach($galeria as $imagem)
            <li>
              <img src="{{ asset($imagem->imagem) }}" alt="" />
              <div class="caption {{ $direcaoImagem[rand(0,2)] }}">
                <h3>{{ $imagem->titulo }}</h3>
                <h5>{{ $imagem->descricao }}</h5>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row" align="center">
        <button onclick="sliderPrev()" class="btn blue">Anterior</button>
        <button onclick="sliderNext()" class="btn blue">Próxima</button>
      </div>
      @else
        <img class="responsive-img" src="{{ asset($oficina->imagem) }}" alt="" />
      @endif
    </div>
    <div class="col s12 m4">
      <h4>{{ $oficina->titulo }}</h4>
      <blockquote>
        {{ $oficina->descricao }}
      </blockquote>
      <p><b>Tipo:</b> {{ $oficina->tipo->titulo }}</p>
      <p><b>Endereço:</b> {{ $oficina->endereco }}</p>
      <p><b>Cep:</b>{{ $oficina->cep }}</p>
      <p><b>Cidade:</b>{{ $oficina->cidade->nome }}</p>
      <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Entrar em contato</a>
    </div>
  </div>

  <div class="row section">
    <!-- col s = Mobile col m = Desktop -->
    @foreach($servicos as $servico)
    <div class="col s12 m3">
      <div class="card">
        <div class="card-content">
          <p><b class="deep-orange-text darken-1">{{ $servico->titulo }}</b></p>
          <p><b>R$: {{ number_format($servico->valor,2,",",".") }}</b></p>
        </div>
        <div class="card-action">
          <a href="{{ route('site.booking.reservar',[$servico->id,str_slug($servico->titulo,'_')]) }}">Agendar</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="row section">
    <div class="col s12 m8">
      <div class="video-container">
        {!! $oficina->mapa !!}
      </div>
    </div>
    <div class="col s12 m4">
      <h4>Detalhes:</h4>
      <p>{{ $oficina->detalhes }}</p>
    </div>
  </div>
</div>
@endsection
