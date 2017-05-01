<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h3 align="center">Contato</h3>
  </div>

  <div class="divider"></div>
  <div class="row section">
    <div class="col s12 m7">
      <img class="responsive-img" src="{{ asset('img/3.jpg') }}" alt="Imagem" />
    </div>
    <div class="col s12 m5">
      <form class="col s12" action="index.html" method="post">
        <div class="input-field">
          <input type="text" name="nome" class="validate" value="">
          <label for="">Nome</label>
        </div>
        <div class="input-field">
          <input type="text" name="email" class="validate" value="">
          <label for="">Email</label>
        </div>
        <div class="input-field">
          <textarea class="materialize-textarea"></textarea>
          <label for="">Mensagem</label>
        </div>
        <button class="btn blue">Enviar</button>
      </form>
    </div>
  </div>
</div>
@endsection
