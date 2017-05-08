<!-- Form para editar usuario -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Editar slide</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.slides') }}" class="breadcrumb">Galeria de imagens</a>
          <a class="breadcrumb">Editar slide</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.slides.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      @include('admin.slides._form')
      <button class="btn blue">Atualizar</button>
    </form>
  </div>
</div>
@endsection
