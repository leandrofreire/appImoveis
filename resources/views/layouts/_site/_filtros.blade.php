<!-- Página de filtro -->
<div class="row">
  <form class="" action="{{ route('site.busca') }}">
    <!-- Filtro por tipo de venda -->
    <div class="input-field col s6 m4">
      <select class="" name="status">
        <option value="todos">Aluga e vende</option>
        <option value="aluga">Aluga</option>
        <option value="vende">Vende</option>
      </select>
      <label>Status</label>
    </div>
    <!-- Filtro de tipo de casa -->
    <div class="input-field col s6 m4">
      <select class="" name="tipo_id">
        <option value="todos">Todos os tipos</option>
        @foreach($tipos as $tipo)
        <option value="{{ $tipo->id }}">{{ $tipo->titulo }}</option>
        @endforeach
      </select>
      <label>Tipo de imóvel</label>
    </div>
    <!-- Filtro por cidade -->
    <div class="input-field col s6 m4">
      <select class="" name="cidade_id">
        <option value="todas">Todas cidades</option>
        @foreach($cidades as $cidade)
        <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
        @endforeach
      </select>
      <label>Cidade</label>
    </div>
    <!-- Filtro por quantidade de quartos -->
    <div class="input-field col s6 m3">
      <select class="" name="dormitorios">
        <option value="todos">Todos</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">Mais</option>
      </select>
      <label>Dormitórios</label>
    </div>
    <!-- Filtro por valores -->
    <div class="input-field col s12 m4">
      <select class="" name="valor">
        <option value="todos">Todos os valores</option>
        <option value="2">R$500,00 até R$1.000,00</option>
        <option value="3">R$1.000,00 até R$5.000,00</option>
        <option value="4">R$5.000,00 até R$10.000,00</option>
        <option value="2">R$10.000,00 até R$50.000,00</option>
        <option value="2">R$50.000,00 até R$100.000,00</option>
        <option value="2">R$100.000,00 até R$200.000,00</option>
        <option value="2">R$200.000,00 até R$300.000,00</option>
        <option value="2">R$300.000,00 até R$400.000,00</option>
        <option value="2">R$400.000,00 até R$500.000,00</option>
        <option value="2">R$500.000,00 até R$1.000.000,00</option>
        <option value="2">Acima de R$1.000.000,00</option>
      </select>
      <label>Valor</label>
    </div>
    <!-- Filtro por bairro-->
    <div class="input-field col s12 m3">
      <input type="text" class="validate" name="bairro">
      <label>Bairro</label>
    </div>
    <!-- Botão de filtro -->
    <div class="input-field col s12 m2">
      <button class="btn deep-orange darken-1 right">Filtrar</button>
    </div>
  </form>
</div>
