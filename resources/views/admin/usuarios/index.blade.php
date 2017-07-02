<!-- Lista de usuarios -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Lista de usuários</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a class="breadcrumb">Lista de usuários</a>
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
            <th>Email</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $usuario)
          <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
              @can('usuario_editar')
              <a class="btn orange" href="{{ route('admin.usuarios.editar', $usuario->id) }}">Editar</a>
              @endcan
              <a class="btn blue" href="{{ route('admin.usuarios.papel', $usuario->id) }}">Papel</a>
              @can('usuario_deletar')
              <a class="btn red" href="javascript: if(confirm('Deletar esse registro?'))
              { window.location.href = '{{ route('admin.usuarios.deletar', $usuario->id) }}' }">Deletar</a>
              @endcan
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.usuarios.adicionar') }}">Adicionar</a>
    </div>
</div>
@endsection
