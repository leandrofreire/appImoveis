<!-- Lista de cidades -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Serviços</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a href="{{ route('admin.oficinas') }}" class="breadcrumb">oficinas</a>
            <a class="breadcrumb">Serviços</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Valor</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->titulo }}</td>
            <td><b>R$: {{ number_format($registro->valor,2,",",".") }}</b></td>
            <td>
              <a class="btn orange" href="{{ route('admin.servicos.editar', $registro->id) }}">Editar</a>
              <a class="btn red" href="javascript: if(confirm('Deletar esse registro?'))
              { window.location.href = '{{ route('admin.servicos.deletar', $registro->id) }}' }">Deletar</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.servicos.adicionar', $oficina->id) }}">Adicionar</a>
    </div>
</div>
@endsection
