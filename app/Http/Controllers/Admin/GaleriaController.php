<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Oficina;
use App\Galeria;

class GaleriaController extends Controller
{
  public function index($id)
  {
      $oficina = Oficina::find($id);
      $registros = $oficina->galeria()->orderBy('ordem')->get();
      return view('admin.galerias.index',compact('registros','oficina'));
  }

  public function adicionar($id)
  {
      $oficina = Oficina::find($id);
      return view('admin.galerias.adicionar',compact('oficina'));
  }

  public function salvar(Request $request, $id)
  {
      $oficina = Oficina::find($id);
      $dados = $request->all();
      if($oficina->galeria()->count()){
        $galeria = $oficina->galeria()->orderBy('ordem', 'desc')->first();
        $ordemAtual = $galeria->ordem;
      }else{
        $ordemAtual = 0;
      }
      if($request->hasFile('imagens')){
        $arquivos = $request->file('imagens');
        foreach ($arquivos as $imagem) {
          $registro = new Galeria();

          $rand = rand(11111,99999);
          $diretorio = "img/oficinas/".str_slug($oficina->titulo,'_')."/";
          $ext = $imagem->guessClientExtension();
          $nomeArquivo = "_img_".$rand.".".$ext;
          $imagem->move($diretorio,$nomeArquivo);
          $registro->oficina_id = $oficina->id;
          $registro->ordem = $ordemAtual + 1;
          $ordemAtual++;
          $registro->imagem = $diretorio.'/'.$nomeArquivo;

          $registro->save();
        }
      }
      \Session::flash('mensagem',[
        'msg'=>'Registro criado com sucesso!',
        'class'=>'green white-text']);

      return redirect()->route('admin.galerias',$oficina->id);

  }

  public function editar($id)
  {
      $registro = Galeria::find($id);
      $oficina = $registro->oficina;
      return view('admin.galerias.editar',compact('registro','oficina'));

  }

  public function atualizar(Request $request, $id)
  {
      $registro = Galeria::find($id);
      $dados = $request->all();

      $registro->titulo = $dados['titulo'];
      $registro->descricao = $dados['descricao'];
      $registro->ordem = $dados['ordem'];

      $oficina = $registro->oficina;

      $file = $request->file('imagem');
      if($file){
      $rand = rand(11111,99999);
      $diretorio = "img/oficinas/".str_slug($oficina->titulo,'_')."/";
      $ext = $file->guessClientExtension();
      $nomeArquivo = "_img_".$rand.".".$ext;
      $file->move($diretorio,$nomeArquivo);
      $registro->imagem = $diretorio.'/'.$nomeArquivo;
    }

      $registro ->update();

      \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

      return redirect()->route('admin.galerias',$oficina->id);
  }

  public function deletar($id)
  {

      $galeria = Galeria::find($id);
      $oficina = $galeria->oficina;
      $galeria->delete();

      \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
      return redirect()->route('admin.galerias',$oficina->id);

  }
}
