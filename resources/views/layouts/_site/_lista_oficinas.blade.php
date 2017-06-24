<div class="row section">
  <h3 align="center">Oficinas</h3>
  <div class="divider"></div>
  <br>
  @include('layouts._site._filtros')
</div>
<div class="row section">
  <!-- col s = Mobile col m = Desktop -->
  @foreach($oficinas as $oficina)
  <div class="col s12 m3">
    <div class="card">
      <div class="card-image">
        <a href="{{ route('site.oficina',[$oficina->id,str_slug($oficina->titulo,'_')]) }}">
          <img src="{{ asset($oficina->imagem) }}" alt="{{ $oficina->titulo }}" />
        </a>
      </div>
      <div class="card-content">
        <p><b class="deep-orange-text darken-1">{{ $oficina->status }}</b></p>
        <p><b>{{ $oficina->titulo }}</b></p>
        <p size="30"><b>{{ $oficina->descricao }}</b></p>
        <p><b>R$: {{ number_format($oficina->valor,2,",",".") }}</b></p>
      </div>
      <div class="card-action">
        <a href="{{ route('site.oficina',[$oficina->id,str_slug($oficina->titulo,'_')]) }}">Ver Mais</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@if($paginacao)
  <div align="center" class="row">
    {{ $oficinas->links() }}
  </div>
@endif
