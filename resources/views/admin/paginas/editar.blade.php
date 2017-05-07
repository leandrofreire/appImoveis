<!-- Form para editar paginas -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h5 class="center">Editar</h5>
  <div class="row">
    <nav>
      <div class="nav-wrapper green">
        <div class="col s12">
          <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
          <a href="{{ route('admin.paginas') }}" class="breadcrumb">Lista de páginas</a>
          <a class="breadcrumb">Editar página</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="row">
    <form class="" action="{{ route('admin.paginas.atualizar', $pagina->id) }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      @include('admin.paginas._form')
      <button class="btn blue">Atualizar</button>
    </form>
  </div>
</div>
@endsection
