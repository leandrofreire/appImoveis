<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
  //Relacionamento das tabelas 1 pra muitos
  public function imoveis()
  {
                    //Id da tabela pra relacionar
    return $this->hasMany('App\Imovel','tipo_id');
  }
}
