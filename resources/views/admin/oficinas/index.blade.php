<!-- Lista de cidades -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Lista de Oficinas</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a class="breadcrumb">Lista de Oficinas</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Cidade</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->id }}</td>
            <td>{{ $registro->titulo }}</td>
            <td>{{ $registro->cidade->nome }}</td>
            <td>
              <img width="100" src="{{ asset($registro->imagem) }}" alt="" />
            </td>
            <td>{{ $registro->publicar }}</td>
            <td class="col m12">
              <a class="btn orange col m6" href="{{ route('admin.oficinas.editar', $registro->id) }}">Editar</a>
              <a class="btn green col m6" href="{{ route('admin.galerias', $registro->id) }}">Galeria</a>
              <a class="btn purple col m6" href="{{ route('admin.servicos', $registro->id) }}">Servicos</a>
              <a class="btn red col m6" href="javascript: if(confirm('Deletar esse registro?'))
              { window.location.href = '{{ route('admin.oficinas.deletar', $registro->id) }}' }">Deletar</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.oficinas.adicionar') }}">Adicionar</a>
    </div>
</div>
@endsection
