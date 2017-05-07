<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Tipo;
use App\Cidade;

class ImovelController extends Controller
{
  public function index()
  {
    $registros = Imovel::all();
    return view('admin.imoveis.index', compact('registros'));
  }
  public function adicionar()
  {
    //Mandar lista de cidade e tipos
    $tipos = Tipo::all();
    $cidades = Cidade::all();

    return view('admin.imoveis.adicionar', compact('tipos', 'cidades'));
  }
  public function salvar(Request $request)
  {
    $dados = $request->all();
    $registro = new Cidade();
    $registro->nome = $dados['nome'];
    $registro->estado = $dados['estado'];
    $registro->sigla_estado = $dados['sigla_estado'];
    $registro->save();
    \Session::flash('mensagem',[
      'msg'=> 'Registro criado com sucesso',
      'class' => 'green white-text'
    ]);
    return redirect()->route('admin.cidades');
  }
  public function editar($id)
  {
    $registro = Cidade::find($id);
    return view('admin.cidades.editar', compact('registro'));
  }
  public function atualizar(Request $request,$id)
  {
    $registro = Cidade::find($id);
    $dados = $request->all();
    $registro->nome = $dados['nome'];
    $registro->estado = $dados['estado'];
    $registro->sigla_estado = $dados['sigla_estado'];
    $registro ->update();
    \Session::flash('mensagem',[
      'msg'=> 'Registro atualizado com sucesso',
      'class' => 'green white-text'
    ]);
    return redirect()->route('admin.cidades');
  }

  public function deletar($id)
  {
    /*
    Teste para verificar se existe imovel
    Relacionado a essa cidade que quer deletar
    */
    if(Imovel::where('cidade_id','=',$id)->count()){

      $msg = "Não é possível deletar essa cidade!
      Esses imóveis(";
      $imoveis = Imovel::where('cidade_id','=',$id)->get();

      foreach ($imoveis as $imovel) {
        $msg .= "id:".$imovel->id." ";
      }
      $msg.= ") estão relacionados.";

      \Session::flash('mensagem',[
        'msg'=> $msg,
        'class' => 'red white-text'
      ]);
      return redirect()->route('admin.cidades');
    }
    Cidade::find($id)->delete();

    \Session::flash('mensagem',[
      'msg'=> 'Registro deletado com sucesso',
      'class' => 'green white-text'
    ]);
    return redirect()->route('admin.cidades');
  }
}
