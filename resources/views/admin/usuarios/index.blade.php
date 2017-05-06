<!-- Lista de usuarios -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="center">Lista de usuários</h2>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a href="#!" class="breadcrumb">Lista de usuários</a>
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
          @foreach($usuarios as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a class="btn orange" href="#">Editar</a>
              <a class="btn red" href="#">Deletar</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
</div>
@endsection
