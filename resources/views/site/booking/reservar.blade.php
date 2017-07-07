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
    <form class="col s12" action="{{ route('site.booking.salvar', [$oficina->id, $servico->id]) }}" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s6">
          <input name="nome" placeholder="Nome completo" id="first_name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
          <input name="email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <input name="data" type="date" class="datepicker" placeholder="Data">
          <label for="">Escolha o dia</label>
        </div>
        <div class="input-field col s6">
        <select>
          <option value="" disabled selected>Hora</option>
          <option value="1">08:00</option>
          <option value="1">08:30</option>
          <option value="1">09:00</option>
          <option value="1">09:30</option>
          <option value="1">10:00</option>
          <option value="1">10:30</option>
          <option value="1">11:00</option>
          <option value="1">11:30</option>
          <option value="1">12:00</option>
          <option value="1">12:30</option>
          <option value="1">13:00</option>
          <option value="1">13:30</option>
          <option value="1">14:00</option>
          <option value="1">14:30</option>
          <option value="1">15:00</option>
          <option value="1">15:30</option>
          <option value="1">16:00</option>
          <option value="1">16:30</option>
          <option value="1">17:00</option>
          <option value="1">17:30</option>
          <option value="1">18:00</option>
          <option value="1">18:30</option>
          <option value="1">19:00</option>
        </select>
        <label>Escolha a hora</label>
      </div>
        <div class="input-field col s12">
           <input name="modelo" type="text" class="validate" placeholder="Carro">
           <label for="">Modelo do carro<label>
        </div>
        <div class="input-field col s6">
           <button class="btn">Agendar</button>
        </div>
      </div>

    </form>
  </div>

</div>
@endsection
