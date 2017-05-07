<!-- Lista de páginas-->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h5 class="center">Lista de páginas</h5>

    <div class="row">
      <nav>
        <div class="nav-wrapper green">
          <div class="col s12">
            <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
            <a class="breadcrumb">Lista de Páginas</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($paginas as $pagina)
          <tr>
            <td>{{ $pagina->id }}</td>
            <td>{{ $pagina->titulo }}</td>
            <td>{{ $pagina->descricao }}</td>
            <td>{{ $pagina->tipo }}</td>
            <td>
              <a class="btn orange" href="{{ route('admin.paginas.editar', $pagina->id) }}">Editar</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
</div>
@endsection
