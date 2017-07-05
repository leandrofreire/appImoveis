<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //Relacionamento de tabelas
    public function oficina()
    {
      return $this->belongsTo('App\oficina','oficina_id');
    }

    // Relacionamento com Booking
    public function bookings()
    {
      return $this->hasMany('App\Booking');
    }
}
