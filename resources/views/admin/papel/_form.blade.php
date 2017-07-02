<div class="input-field">
  <input type="text" name="nome" class="validate" value="{{ isset($registro->nome)? $registro->nome : '' }}" />
  <label>Nome do papel</label>
</div>

<div class="input-field">
  <input type="text" name="estado" class="validate" value="{{ isset($registro->descricao)? $registro->descricao : '' }}" />
  <label>Descrição</label>
</div>
