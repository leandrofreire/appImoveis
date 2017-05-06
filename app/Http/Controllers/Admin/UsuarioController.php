<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;//Sistema de autentificação do Laravel

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
      $dados = $request->all();
      //dd($dados);
      if(Auth::attempt(['email' =>$dados['email'], 'password'=>$dados['password']])){
        return redirect()->route('admin.principal');
      }

      return redirect()->route('site.home');
    }
}
