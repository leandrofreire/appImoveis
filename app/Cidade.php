<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  //Relacionamento das tabelas 1 pra muitos
  public function imoveis()
  {
                    //Id da tabela pra relacionar
    return $this->hasMany('App\Imovel','cidade_id');
  }
}
