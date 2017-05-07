<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    // Define o nome da tabela
    protected $table = "imoveis";

    //Relacionamento das tabelas muitos pra 1
    public function tipo()
    {
                      //Id da tabela pra relacionar
      return $this->belongsTo('App\Tipo','tipo_id');
    }

    //Relacionamento das tabelas muitos pra 1
    public function cidade()
    {
                      //Id da tabela pra relacionar
      return $this->belongsTo('App\Cidade','cidade_id');
    }
    // Relacionamento das tabelas 1 pra muitos
    public function galeria()
    {
      return $this->hasMany('App\Galeria', 'imovel_id');
    }
}