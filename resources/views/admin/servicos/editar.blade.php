<!-- Form para editar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Editar Serviço</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.servicos', $oficina->id) }}" class="breadcrumb">Serviços</a>
          <a class="breadcrumb">Editar serviço</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.servicos.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      @include('admin.servicos._form')
      <button class="btn blue">Atualizar</button>
    </form>
  </div>
</div>
@endsection
