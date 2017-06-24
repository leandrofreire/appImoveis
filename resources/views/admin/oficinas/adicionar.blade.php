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
          <a href="{{ route('admin.oficinas') }}" class="breadcrumb">Lista de oficinas</a>
          <a class="breadcrumb">Adicionar oficina</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.oficinas.salvar') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('admin.oficinas._form')
      <button class="btn blue">Adicionar</button>
    </form>
  </div>
</div>
@endsection
