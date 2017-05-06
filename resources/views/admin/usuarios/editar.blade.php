<!-- Form para editar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Editar</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de usuários</a>
          <a class="breadcrumb">Editar usuário</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.usuarios.atualizar', $usuario->id) }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      @include('admin.usuarios._form')
      <button class="btn blue">Atualizar</button>
    </form>
  </div>
</div>
@endsection
