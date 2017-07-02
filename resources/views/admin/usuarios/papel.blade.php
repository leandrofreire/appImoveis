<!-- Lista de usuarios -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Lista de papéis para {{ $usuario->name }}</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de usuários</a>
            <a class="breadcrumb">Lista de papéis</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="row">
      <form class="" action="{{ route('admin.usuarios.papel.salvar',$usuario->id) }}" method="post">
        {{ csrf_field() }}
        <div class="input-field">
          <select class="" name="papel_id">
            @foreach($papel as $valor)
            <option value="{{ $valor->id }}">{{ $valor->nome }}</option>
            @endforeach
          </select>
        </div>
        <button class="btn blue">Adicionar</button>
      </form>
    </div>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Papel</th>
            <th>Descrição</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuario->papeis as $papel)
          <tr>
            <td>{{ $papel->nome }}</td>
            <td>{{ $papel->descricao }}</td>
            <td>
              <a class="btn red" href="javascript: if(confirm('Remover esse papel?'))
              { window.location.href = '{{ route('admin.usuarios.papel.remover', [$usuario->id,$papel->id])}}' }">Remover</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>

</div>
@endsection
