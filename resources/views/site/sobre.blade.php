<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h3 align="center">Sobre</h3>
  </div>
  <div class="divider"></div>
  <div class="row section">
    <div class="col s12 m6">
      <img class="responsive-img" src="{{ asset('img/3.jpg') }}" alt="Imagem" />
    </div>
    <div class="col s12 m6">
      <h4>A empresa</h4>
      <blockquote>
        Descrição breve sobre a empresa
      </blockquote>
      <p>Texto sobre a empresa</p>
    </div>
  </div>
</div>
@endsection
