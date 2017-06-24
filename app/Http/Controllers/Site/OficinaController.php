<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\oficina;

class OficinaController extends Controller
{
    public function index($id)
    {
      $oficina = oficina::find($id);
      $galeria = $oficina->galeria()->orderBy('ordem')->get();
      $direcaoImagem = ['center-align', 'left-align', 'right-align'];
      return view('site.oficina', compact('oficina','galeria','direcaoImagem'));
    }
}
