<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Conta quais paginas sobre existem
      $existe = Pagina::where('tipo', '=', 'sobre')->count();
      // ALtera a primeira pagina sobre
      if($existe){
        $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
      }
      else{
        $paginaSobre = new Pagina();
      }

      $paginaSobre->titulo = "A empresa";
      $paginaSobre->descricao = "Descrção sobre a empresa";
      $paginaSobre->texto = "Texto sobre a empresa";
      $paginaSobre->imagem = "public/img/1.jpg";
      $paginaSobre->tipo = "sobre";
      $paginaSobre->save();
      echo "Pagina sobre criada com sucesso";
    }
}
