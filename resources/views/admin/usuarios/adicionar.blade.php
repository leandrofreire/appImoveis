<!-- Form para adicionar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Adicionar</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de usuários</a>
          <a href="#!" class="breadcrumb">Adicionar usuários</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.usuarios.salvar') }}" method="post">
      {{ csrf_field() }}
      @include('admin.usuarios._form')
      <button class="btn blue">Adicionar</button>
    </form>
  </div>
</div>
@endsection
