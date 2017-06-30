<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oficina extends Model
{
    // Define o nome da tabela
    protected $table = "oficinas";

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
      return $this->hasMany('App\Galeria', 'oficina_id');
    }
    //Relacionamento das tabels 1 para muitos
    public function servicos()
    {
      return $this->hasMany('App\Servico');
    }
}
