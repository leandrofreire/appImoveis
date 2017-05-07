<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
   //Relacionamento de tabelas
    public function imovel()
    {
      return $this->belongsTo('App\Imovel','imovel_id');
    }
}
