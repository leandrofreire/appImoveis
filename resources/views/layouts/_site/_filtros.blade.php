<!-- Página de filtro -->
<div class="row">
  <form class="" action="{{ route('site.busca') }}">
    <!-- Filtro por tipo de venda -->
    <div class="input-field col s6 m4">
      <select class="" name="status">
        <option {{ isset($busca['status']) && $busca['status'] == 'todos' ? 'selected' : '' }} value="todos">Aluga e vende</option>
        <option {{ isset($busca['status']) && $busca['status'] == 'aluga' ? 'selected' : '' }} value="aluga">Aluga</option>
        <option {{ isset($busca['status']) && $busca['status'] == 'vende' ? 'selected' : '' }} value="vende">Vende</option>
      </select>
      <label>Status</label>
    </div>
    <!-- Filtro de tipo de casa -->
    <div class="input-field col s6 m4">
      <select class="" name="tipo_id">
        <option {{ isset($busca['tipo_id']) && $busca['tipo_id'] == 'todos' ? 'selected' : '' }} value="todos">Todos os tipos</option>
        @foreach($tipos as $tipo)
        <option {{ isset($busca['tipo_id']) && $busca['tipo_id'] == $tipo->id ? 'selected' : '' }} value="{{ $tipo->id }}">{{ $tipo->titulo }}</option>
        @endforeach
      </select>
      <label>Tipo de imóvel</label>
    </div>
    <!-- Filtro por cidade -->
    <div class="input-field col s6 m4">
      <select class="" name="cidade_id">
        <option {{ isset($busca['cidade_id']) && $busca['cidade_id'] == 'todos' ? 'selected' : '' }} value="todos">Todas cidades</option>
        @foreach($cidades as $cidade)
        <option {{ isset($busca['cidade_id']) && $busca['cidade_id'] == $cidade->id ? 'selected' : '' }} value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
        @endforeach
      </select>
      <label>Cidade</label>
    </div>
    <!-- Filtro por quantidade de quartos -->
    <div class="input-field col s6 m3">
      <select class="" name="dormitorios">
        <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 0 ? 'selected' : '' }} value="0">Todos</option>
        <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 1 ? 'selected' : '' }} value="1">1</option>
        <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 2 ? 'selected' : '' }} value="2">2</option>
        <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 3 ? 'selected' : '' }} value="3">3</option>
        <option {{ isset($busca['dormitorios']) && $busca['dormitorios'] == 4 ? 'selected' : '' }} value="4">4</option>
      </select>
      <label>Dormitórios</label>
    </div>
    <!-- Filtro por bairro-->
    <div class="input-field col s12 m3">
      <input type="text" class="validate" name="bairro" value="{{ isset($busca['bairro']) ? $busca['bairro'] : '' }}">
      <label>Bairro</label>
    </div>
    <!-- Botão de filtro -->
    <div class="input-field col s12 m2">
      <button class="btn deep-orange darken-1 right">Filtrar</button>
    </div>
  </form>
</div>
