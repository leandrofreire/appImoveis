<!-- Form para adicionar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Adicionar tipos</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.cidades') }}" class="breadcrumb">Lista de cidades</a>
          <a class="breadcrumb">Adicionar tipo</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.cidades.salvar') }}" method="post">
      {{ csrf_field() }}
      @include('admin.cidades._form')
      <button class="btn blue">Adicionar</button>
    </form>
  </div>
</div>
@endsection
