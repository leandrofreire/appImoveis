<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Papel;

class PapelController extends Controller
{
  public function index()
  {
    $registros = Papel::all();
    return view('admin.papel.index', compact('registros'));
  }

  public function adicionar()
  {
    return view('admin.papel.adicionar');
  }

  public function salvar(Request $request)
  {
    Papel::create($request->all());
    \Session::flash('mensagem', [
      'msg'=> 'Papel salvo com sucesso',
      'class'=> 'white green-text'
    ]);
    return redirect()->route('admin.papel');
  }

  public function editar($id)
  {
    if(Papel::find($id)->nome == "admin"){
      return redirect()->route('admin.papel');
    }
    $registro = Papel::find($id);
    return view('admin.papel.editar', compact('registro'));
  }
  public function atualizar(Request $request, $id)
  {
    if(Papel::find($id)->nome == "admin"){
      return redirect()->route('admin.papel');
    }
    Papel::find($id)->update($request->all());
    \Session::flash('mensagem', [
      'msg'=> 'Papel atualizado com sucesso',
      'class'=> 'white green-text'
    ]);
    return redirect()->route('admin.papel');
  }
  public function deletar($id)
  {
    if(Papel::find($id)->nome == "admin"){
      return redirect()->route('admin.papel');
    }
    Papel::find($id)->delete();
    \Session::flash('mensagem', [
      'msg'=> 'Papel deletado com sucesso',
      'class'=> 'white green-text'
    ]);
    return redirect()->route('admin.papel');
  }
}
