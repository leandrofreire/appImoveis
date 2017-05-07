<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function sobre()
    {
      // retorna a primeira pagina sobre encontrada
      $pagina = Pagina::where('tipo','=','sobre')->first();

      return view('site.sobre', compact('pagina'));
    }

    public function contato()
    {
      // retorna a primeira pagina sobre encontrada
      $pagina = Pagina::where('tipo','=','contato')->first();

      return view('site.contato', compact('pagina'));
    }
    public function enviarContato(Request $request)
    {
      dd($request);
    }
}
