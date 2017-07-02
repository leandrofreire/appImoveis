<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\oficina;
use App\Servico;

class OficinaController extends Controller
{
    public function index($id)
    {
      $oficina = oficina::find($id);
      $galeria = $oficina->galeria()->orderBy('ordem')->get();
      $direcaoImagem = ['center-align', 'left-align', 'right-align'];
      $servicos = $oficina->servicos;

      $seo = [
        'titulo'=>$oficina->titulo,
        'descricao'=>$oficina->descricao,
        'imagem'=> asset($oficina->imagem),
        'url'=> route('site.oficina',[$oficina->id,str_slug($oficina->titulo,'_')])
      ];
      return view('site.oficina', compact('oficina','galeria','direcaoImagem','servicos', 'seo'));
    }
}
