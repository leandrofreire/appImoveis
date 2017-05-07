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
      $existe = Pagina::where('tipo','=','sobre')->count();
      // ALtera a primeira pagina sobre
      if($existe){
        $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
      }
      else{
        $paginaSobre = new Pagina();
      }

      $paginaSobre->titulo = "4Mechanic";
      $paginaSobre->descricao = "Descrção sobre a empresa";
      $paginaSobre->texto = "Texto sobre a empresa";
      $paginaSobre->imagem = "img/3.jpg";
      $paginaSobre->mapa = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.0235506717936!2d-46.49290978538107!3d-23.67511577168727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce69913a3145a1%3A0xefc0890b3ca54da1!2sR.+J%C3%BAlio+de+Mesquita+Filho%2C+31+-+Parque+Gerassi%2C+Santo+Andr%C3%A9+-+SP%2C+09120-190!5e0!3m2!1spt-BR!2sbr!4v1494116423068' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>";
      $paginaSobre->tipo = "sobre";
      $paginaSobre->save();
      echo "Pagina sobre criada com sucesso";
    }
}
