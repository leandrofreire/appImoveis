<!-- Form para adicionar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Adicionar </h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.imoveis') }}" class="breadcrumb">Lista de imoveis</a>
          <a class="breadcrumb">Adicionar imóvel</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.imoveis.salvar') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('admin.imoveis._form')
      <button class="btn blue">Adicionar</button>
    </form>
  </div>
</div>
@endsection
