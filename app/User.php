<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function papeis()
    {
      return $this->belongsToMany(Papel::class);
    }

    public function adicionaPapel($papel)
    {
      if(is_string($papel)){
        return $this->papeis()->save(
          Papel::where('nome','=',$papel)->firstOrFail()
        );
      }
      return $this->papeis()->save(
        Papel::where('nome','=',$papel->nome)->firstOrFail()
      );
    }

    public function removerPapel($papel)
    {
      if(is_string($papel)){
        return $this->papeis()->detach(
          Papel::where('nome','=',$papel)->firstOrFail()
        );
      }
      return $this->papeis()->detach(
        Papel::where('nome','=',$papel->nome)->firstOrFail()
      );
    }
}
