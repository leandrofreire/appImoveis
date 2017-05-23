<div class="row section">
  <h3 align="center">Imóveis</h3>
  <div class="divider"></div>
  <br>
  @include('layouts._site._filtros')
</div>
<div class="row section">
  <!-- col s = Mobile col m = Desktop -->
  @foreach($imoveis as $imovel)
  <div class="col s12 m3">
    <div class="card">
      <div class="card-image">
        <a href="{{ route('site.imovel',[$imovel->id,str_slug($imovel->titulo,'_')]) }}">
          <img src="{{ asset($imovel->imagem) }}" alt="{{ $imovel->titulo }}" />
        </a>
      </div>
      <div class="card-content">
        <p><b class="deep-orange-text darken-1">{{ $imovel->status }}</b></p>
        <p><b>{{ $imovel->titulo }}</b></p>
        <p size="30"><b>{{ $imovel->descricao }}</b></p>
        <p><b>R$: {{ number_format($imovel->valor,2,",",".") }}</b></p>
      </div>
      <div class="card-action">
        <a href="{{ route('site.imovel',[$imovel->id,str_slug($imovel->titulo,'_')]) }}">Ver Mais</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@if($paginacao)
  <div align="center" class="row">
    {{ $imoveis->links() }}
  </div>
@endif
