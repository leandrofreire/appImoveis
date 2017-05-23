<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Slide;
use App\Tipo;
use App\Cidade;

class HomeController extends Controller
{
    public function index()
    {
      $imoveis = Imovel::where('publicar','=','sim')->orderBy('id','desc')->paginate(20);
      $slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
      $direcaoImagem = ['center-align', 'left-align', 'right-align'];
      $paginacao = true;
      $tipos = Tipo::orderBy('titulo')->get();
      $cidades = Cidade::orderBy('nome')->get();
      return view('site.home', compact('imoveis','slides','direcaoImagem','paginacao','tipos','cidades'));
    }
    //Método de busca (filtro)
    public function busca(Request $request){
      $busca = $request->all();

      $paginacao = false;
      $tipos = Tipo::orderBy('titulo')->get();
      $cidades = Cidade::orderBy('nome')->get();

      if($busca['status'] == 'todos'){
        $testeStatus = [
          ['status','<>',null]
        ];
      }else{
        $testeStatus = [
          ['status','=',$busca['status']]
        ];
      }

      $imoveis = Imovel::where('publicar','=','sim')
      ->where($testeStatus)
      ->orderBy('id','desc')->get();
      return view('site.busca', compact('busca', 'imoveis','paginacao','tipos','cidades'));
    }
}
