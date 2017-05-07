<div class="input-field">
  <input type="text" name="titulo" class="validate" value="{{ isset($registro->titulo)? $registro->titulo : '' }}" />
  <label>Título do imóvel</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" class="validate" value="{{ isset($registro->descricao)? $registro->descricao : '' }}" />
  <label>Descrição do imóvel</label>
</div>

<div class="row">
  <div class="file-field input-field col m6 s12">
    <div class="btn">
      <span>Imagem</span>
      <input type="file" name="imagem" value="">
    </div>
    <div class="file-path-wrapper">
      <input type="text" class="file-path validate">
    </div>
  </div>
  <div class="col m6 s12">
    @if(isset($registro->imagem))
      <img width="120" src="{{ asset($registro->imagem) }}" alt="" />
    @endif
  </div>
</div>

<div class="input-field col s12">
  <select class="status" name="status">
    <option value="aluga" {{(isset($registro->aluga)
      && $registro->status == 'aluga' ? 'selected' : '')}}>Aluga
    </option>
    <option value="aluga" {{(isset($registro->vende)
      && $registro->status == 'vende' ? 'selected' : '')}}>Vende
    </option>
  </select>
  <label>Status</label>
</div>

<div class="input-field col s12">
  <select name="tipo_id">
    @foreach($tipos as $tipo)
    <option value="{{ $tipo->id }}" {{(isset($registro->tipo_id)
      && $registro->status == 'aluga' ? 'selected' :)}}>Aluga
    </option>
    <option value="aluga" {{(isset($registro->vende)
      && $registro->tipo_id == $tipo->id ? 'selected' : '')}}>{{ $tipo->titulo }}
    </option>
    @endforeach
  </select>
  <label>Tipo</label>
</div>

<div class="input-field col s12">
  <select name="tipo_id">
    @foreach($cidades as $cidade)
    <option value="{{ $cidade->id }}" {{(isset($registro->cidade_id)
      && $registro->status == 'aluga' ? 'selected' :)}}>Aluga
    </option>
    <option value="aluga" {{(isset($registro->vende)
      && $registro->cidade_id == $cidade->id ? 'selected' : '')}}>{{ $cidade->titulo }}
    </option>
    @endforeach
  </select>
  <label>Cidade</label>
</div>

<div class="input-field">
  <input type="text" name="valor" class="validate" value="{{ isset($registro->valor)? $registro->valor : '' }}" />
  <label>Valor</label>
</div>

<div class="input-field">
  <input type="text" name="dormitorios" class="validate" value="{{ isset($registro->dormitorios)? $registro->dormitorios : '' }}" />
  <label>Dormitorios</label>
</div>

<div class="input-field">
  <input type="text" name="detaçhes" class="validate" value="{{ isset($registro->detaçhes)? $registro->detaçhes : '' }}" />
  <label>Detalhes</label>
</div>

<div class="input-field">
  <textarea name="mapa">
    {{ (isset($registro->mapa) ? $registro->mapa : '') }}
  </textarea>
  <label>Mapa (Cole o ifame do Google)</label>
</div>


<div class="input-field col s12">
  <select name="publicar">
    <option value="nao" {{(isset($registro->publicar)
      && $registro->publicar == 'nao' ? 'selected' : '')}}>Não
    </option>
    <option value="sim" {{(isset($registro->publicar)
      && $registro->publicar == 'sim' ? 'selected' : '')}}>Sim
    </option>
  </select>
  <label>Publicar ?</label>
</div>










//
