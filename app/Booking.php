<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function servico()
    {
      return $this->belongsTo('App\Servico', 'servico_id');
    }
}
