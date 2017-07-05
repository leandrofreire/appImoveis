<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h5 align="center">Efetue a reserva</h5>
    <div class="divider"></div>
  </div>

  <div class="row section">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">

          <p>Oficina
            <b class="deep-orange-text darken-1">
              {{ $oficina->titulo }}
            </b>
          </p>
          <p>Endereço
            <b class="deep-orange-text darken-1">
              {{ $oficina->endereco }}
            </b>
          </p>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <p>Serviço
            <b class="green-text darken-1">{{ $servico->titulo }}</b>
          </p>
          <p>Valor
            <b class="green-text darken-1">R$: {{ number_format($servico->valor,2,",",".") }}</b>
          </p>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
    </form>
  </div>

</div>
@endsection
