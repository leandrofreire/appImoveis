<!--Extensao da pagina principal-->
@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
    <h5 align="center">Efetue a reserva</h5>
    <div class="divider"></div>
  </div>


  <div class="row">
    Deu certo
    <tbody>
      @foreach($booking as $book)
      <tr>
        <td>
          {{ $book->nome }}
        </td>
      </tr>
    </tbody>

  </div>

</div>
@endsection
