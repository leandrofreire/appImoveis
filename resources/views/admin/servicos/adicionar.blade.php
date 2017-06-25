<!-- Form para adicionar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Adicionar serviço</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.servicos',$oficina->id) }}" class="breadcrumb">oficinas</a>
          <a class="breadcrumb">Adicionar Serviço</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.servicos.salvar',$oficina->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('admin.servicos._form')
      <button class="btn blue">Adicionar</button>
    </form>
  </div>
</div>
@endsection
