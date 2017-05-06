<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;//Sistema de autentificação do Laravel
use App\User;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
      $dados = $request->all();

      if(Auth::attempt(['email' =>$dados['email'], 'password'=>$dados['password']])){
        \Session::flash('mensagem',[
          'msg'=> 'Login realizado com sucesso',
          'class' => 'green white-text'
        ]);
        return redirect()->route('admin.principal');
      }
      \Session::flash('mensagem',[
        'msg'=> 'Senha ou email incorretos',
        'class' => 'red white-text'
      ]);
      return redirect()->route('admin.login');
    }

    public function sair()
    {
      Auth::logout();
      return redirect()->route('admin.login');
    }
    public function index()
    {
      $usuarios = User::all();
      return view('admin.usuarios.index', compact('usuarios'));
    }
}
