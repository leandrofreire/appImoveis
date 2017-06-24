<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Oficina;
use App\Tipo;
use App\Cidade;

class OficinaController extends Controller
{
    public function index()
    {
        $registros = Oficina::all();
        return view('admin.oficinas.index',compact('registros'));
    }

    public function adicionar()
    {

        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.oficinas.adicionar',compact('tipos','cidades'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Oficina();
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->endereco= $dados['endereco'];
        $registro->cep= $dados['cep'];
        $registro->detalhes= $dados['detalhes'];
        $registro->visualizacoes= 0;
        $registro->publicar= $dados['publicar'];
        if(isset($dados['mapa']) && trim($dados['mapa']) != "" ){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->cidade_id= $dados['cidade_id'];
        $registro->tipo_id= $dados['tipo_id'];

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/oficinas/".str_slug($dados['titulo'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}


        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.oficinas');

    }

    public function editar($id)
    {
        $registro = Oficina::find($id);

        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.oficinas.editar',compact('registro','tipos','cidades'));

    }

    public function atualizar(Request $request, $id)
    {
        $registro = Oficina::find($id);
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->endereco= $dados['endereco'];
        $registro->cep= $dados['cep'];
        $registro->detalhes= $dados['detalhes'];

        $registro->publicar= $dados['publicar'];
        if(isset($dados['mapa']) && trim($dados['mapa']) != "" ){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->cidade_id= $dados['cidade_id'];
        $registro->tipo_id= $dados['tipo_id'];

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/oficinas/".str_slug($dados['titulo'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}


        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.oficinas');
    }

    public function deletar($id)
    {

        Oficina::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.oficinas');

    }
}
