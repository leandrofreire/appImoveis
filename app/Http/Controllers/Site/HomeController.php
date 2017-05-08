<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Slide;

class HomeController extends Controller
{
    public function index()
    {
      $imoveis = Imovel::orderBy('id','desc')->paginate(20);
      $slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
      $direcaoImagem = ['center-align', 'left-align', 'right-align'];
      return view('site.home', compact('imoveis','slides','direcaoImagem'));
    }
}
