<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\oficina;
use App\Slide;
use App\Tipo;
use App\Cidade;

class HomeController extends Controller
{
    public function index()
    {
      $oficinas = oficina::where('publicar','=','sim')->orderBy('id','desc')->paginate(20);
      $slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
      $direcaoImagem = ['center-align', 'left-align', 'right-align'];
      $paginacao = true;
      $tipos = Tipo::orderBy('titulo')->get();
      $cidades = Cidade::orderBy('nome')->get();
      return view('site.home', compact('oficinas','slides','direcaoImagem','paginacao','tipos','cidades'));
    }
    //Método de busca (filtro)
    public function busca(Request $request){
      $busca = $request->all();

      $paginacao = false;
      $tipos = Tipo::orderBy('titulo')->get();
      $cidades = Cidade::orderBy('nome')->get();


      if($busca['tipo_id'] == 'todos'){
        $testeTipo = [['tipo_id','<>',null]];
      }else{
        $testeTipo = [['tipo_id','=',$busca['tipo_id']]];
      }
      if($busca['cidade_id'] == 'todos'){
        $testeCidade = [['cidade_id','<>',null]];
      }else{
        $testeCidade = [['cidade_id','=',$busca['cidade_id']]];
      }


      if($busca['bairro'] != ''){
        $testeBairro = [
          ['endereco','like','%'.$busca['bairro'].'%']
        ];
      }else{
        $testeBairro = [
          ['endereco','<>',null]
        ];
      }

      $oficinas = oficina::where('publicar','=','sim')
      ->where($testeTipo)
      ->where($testeCidade)
      ->where($testeBairro)
      ->orderBy('id','desc')->get();
      return view('site.busca', compact('busca', 'oficinas','paginacao','tipos','cidades'));
    }
}
