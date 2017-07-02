<!-- Login admin -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h4 class="center">4Mechanic - sistema administrativo</h4>
    <div class="row">

      <div class="col s12 m4">
        <div class="card green darken-1">
          <div class="card-content white-text">
            <span class="card-title">Oficinas</span>
            <p>Lista de Oficinas</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.oficinas') }}">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card blue darken-1">
          <div class="card-content white-text">
            <span class="card-title">Tipos</span>
            <p>Tipos de oficinas</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.tipos') }}">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card orange darken-1">
          <div class="card-content white-text">
            <span class="card-title">Cidades</span>
            <p>Lista de Cidades</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.cidades') }}">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6">
        <div class="card purple darken-1">
          <div class="card-content white-text">
            <span class="card-title">Slides</span>
            <p>Lista de slides da Home</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.slides') }}">Acessar</a>
          </div>
        </div>
      </div>
      <!-- Apensas Admin -->
      @can('usuario_listar')
      <div class="col s12 m6">
        <div class="card pink darken-1">
          <div class="card-content white-text">
            <span class="card-title">Usuários</span>
            <p>Lista de usuários</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.usuarios') }}">Acessar</a>
          </div>
        </div>
      </div>
      @endcan
      <div class="col s12 m6">
        <div class="card red darken-1">
          <div class="card-content white-text">
            <span class="card-title">Papel</span>
            <p>Lista de papéis do sistema</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.papel') }}">Acessar</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6">
        <div class="card teal darken-1">
          <div class="card-content white-text">
            <span class="card-title">Páginas</span>
            <p>Lista de páginas</p>
          </div>
          <div class="card-action">
            <a class="white-text" href="{{ route('admin.paginas') }}">Acessar</a>
          </div>
        </div>
      </div>

    </div><!-- row -->
  </div><!-- container -->
@endsection
