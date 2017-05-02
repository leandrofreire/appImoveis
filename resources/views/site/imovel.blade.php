<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h3 align="center">Imóvel</h3>
    <div class="divider"></div>
  </div>

  <div class="row section">
    <div class="col s12 m8">
      <div class="row">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="{{ asset('img/1.jpg') }}" alt="" />
              <div class="caption center-align">
                <h3>Titulo da imagem</h3>
                <h5>Descrição do slide</h5>
              </div>
            </li>
            <li>
              <img src="{{ asset('img/2.jpg') }}" alt="" />
              <div class="caption center-align">
                <h3>Titulo da imagem</h3>
                <h5>Descrição do slide</h5>
              </div>
            </li>
            <li>
              <img src="{{ asset('img/3.jpg') }}" alt="" />
              <div class="caption center-align">
                <h3>Titulo da imagem</h3>
                <h5>Descrição do slide</h5>
              </div>
            </li>
            <li>
              <img src="{{ asset('img/4.jpg') }}" alt="" />
              <div class="caption center-align">
                <h3>Titulo da imagem</h3>
                <h5>Descrição do slide</h5>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row" align="center">
        <button onclick="sliderPrev()" class="btn blue">Anterior</button>
        <button onclick="sliderNext()" class="btn blue">Próxima</button>
      </div>
    </div>
    <div class="col s12 m4">
      <h4>Título do imóvel</h4>
      <blockquote>
        Descrição do imóvel
      </blockquote>
      <p><b>Código:</b> 245</p>
      <p><b>Status:</b> Vende</p>
      <p><b>Tipo:</b> Alvenaria</p>
      <p><b>Endereço:</b> Av Paulista</p>
      <p><b>Cep:</b> 09120 - 190</p>
      <p><b>Cidade:</b> São Paulo</p>
      <p><b>Valor:</b> R$200.000,00</p>
      <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Entrar em contato</a>
    </div>
  </div>
</div>
@endsection
