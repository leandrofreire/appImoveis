<!-- Lista de cidades -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Lista de slides</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a class="breadcrumb">Lista de slides</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Ordem</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Publicação</th>
            <th>Imagem</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->ordem }}</td>
            <td>{{ $registro->titulo }}</td>
            <td>{{ $registro->descricao }}</td>
            <td>{{ $registro->publicado }}</td>
            <td>
              <img width="100" src="{{ asset($registro->imagem) }}" alt="" />
            </td>
            <td>
              <a class="btn orange" href="{{ route('admin.slides.editar', $registro->id) }}">Editar</a>
              <a class="btn red" href="javascript: if(confirm('Deletar esse registro?'))
              { window.location.href = '{{ route('admin.slides.deletar', $registro->id) }}' }">Deletar</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.slides.adicionar') }}">Adicionar</a>
    </div>
</div>
@endsection
