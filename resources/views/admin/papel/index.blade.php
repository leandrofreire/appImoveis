<!-- Lista de cidades -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Lista de papéis</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a class="breadcrumb">Lista de papéis</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->id }}</td>
            <td>{{ $registro->nome }}</td>
            <td>{{ $registro->descricao }}</td>
            <td>
              @can('papel_editar')
                @if($registro->nome != 'admin')
                <a class="btn orange" href="{{ route('admin.papel.editar', $registro->id) }}">Editar</a>
                @else
                <a class="btn orange disabled">Editar</a>
                @endif
              @endcan
                <a class="btn blue" href="{{ route('admin.papel.permissao', $registro->id) }}">Permissao</a>
                @if($registro->nome != 'admin')
              @can('papel_deletar')
                <a class="btn red" href="javascript: if(confirm('Deletar esse registro?'))
                { window.location.href = '{{ route('admin.papel.deletar', $registro->id) }}' }">Deletar</a>
                @else
                <a class="btn red disabled">Deletar</a>
                @endif
              @endcan
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.papel.adicionar') }}">Adicionar</a>
    </div>
</div>
@endsection
