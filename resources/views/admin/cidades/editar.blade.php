<!-- Form para editar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Editar cidades</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.cidades') }}" class="breadcrumb">Lista de cidades</a>
          <a class="breadcrumb">Editar tipo</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.cidades.atualizar', $registro->id) }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      @include('admin.cidades._form')
      <button class="btn blue">Atualizar</button>
    </form>
  </div>
</div>
@endsection
