<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  //Relacionamento das tabelas 1 pra muitos
  public function oficinas()
  {
                    //Id da tabela pra relacionar
    return $this->hasMany('App\oficina','cidade_id');
  }
}
