<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Oficina;
use App\Servico;

class ServicoController extends Controller
{
    public function index($id)
    {
      $oficina = Oficina::find($id);
      $registros = $oficina->servicos;
      //$registros = $oficina->servico;
      //dd($registros);
      return view('admin.servicos.index', compact('registros','oficina'));
    }
    public function adicionar($id)
    {
      $oficina = Oficina::find($id);
      return view('admin.servicos.adicionar', compact('oficina'));
    }
    public function salvar(Request $request, $id)
    {
      $oficina = Oficina::find($id);
      $dados = $request->all();

      $registro = new Servico();
      $registro->titulo = $dados['titulo'];
      $registro->valor = $dados['valor'];
      $registro->oficina_id = $oficina->id;
      $registro->save();

      \Session::flash('mensagem',[
        'msg'=>'Registro criado com sucesso!',
        'class'=>'green white-text']);

      return redirect()->route('admin.servicos',$oficina->id);
    }

    public function editar($id)
    {
      $registro = Servico::find($id);
      $oficina = $registro->oficina;
      return view('admin.servicos.editar', compact('registro','oficina'));
    }
    public function atualizar(Request $request, $id)
    {
      $registro = Servico::find($id);
      $dados = $request->all();
      $registro->titulo = $dados['titulo'];
      $registro->valor = $dados['valor'];

      $oficina = $registro->oficina;
      $registro->update();
      \Session::flash('mensagem',[
        'msg'=>'Registro atualizado com sucesso!',
        'class'=>'green white-text']);
        return redirect()->route('admin.servicos',$oficina->id);
    }
    public function deletar($id)
    {
      $servico = Servico::find($id);
      $oficina = $servico->oficina;
      $servico->delete();
      \Session::flash('mensagem',[
        'msg'=>'Registro deletado com sucesso!',
        'class'=>'green white-text']);
        return redirect()->route('admin.servicos',$oficina->id);
    }
}
