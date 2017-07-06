<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servico;
use App\Oficina;
use App\Booking;

class BookingController extends Controller
{
    public function index($id)
    {
      $servico = Servico::find($id);
      $oficina = Oficina::find($id);
      return view('site.booking', compact('servico', 'oficina'));
    }

    public function salvar(Request $request)
    {
    //  $servico = Servico::find($id);
    //  $oficina = Oficina::find($id);
      $dados = $request->all();

      $registro = new Booking();
      $registro->nome = $dados['nome'];
      $registro->email = $dados['data'];
      $registro->data = $dados['data'];
      $registro->modelo = $dados['modelo'];
    //  $registro->oficina_id = $oficina->id;
  //    $registro->servico_id = $servico->id;
  //    $registro->save();

      \Session::flash('mensagem',[
        'msg'=>'Serviço Agendado com sucesso!
        Você receberá um email com os detalhes do agendamento. Obrigado',
        'class'=>'green white-text']);

      return redirect()->route('site.home');

    }
}
