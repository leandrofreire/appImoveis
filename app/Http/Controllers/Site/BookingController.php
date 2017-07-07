<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servico;
use App\Oficina;
use App\Booking;


class BookingController extends Controller
{
    public function adicionar($id)
    {
      $servico = Servico::find($id);
      $oficina = Oficina::find($id);
      return view('site.booking.reservar', compact('servico', 'oficina'));
    }

    public function salvar(Request $request, $id)
    {
      $servico = Servico::find($id);
      $oficina = Oficina::find($id);
      $dados = $request->all();

      $registro = new Booking();
      $registro->nome = $dados['nome'];
      $registro->email = $dados['email'];
      $registro->data = $dados['data'];
      $registro->modelo = $dados['modelo'];
      $registro->oficina_id = $oficina->id;
      $registro->servico_id = $servico->id;
      $registro->save();

      \Session::flash('mensagem',[
        'msg'=>'Serviço Agendado com sucesso!',
        'class'=>'green white-text']);

        return redirect()->route('site.home');
    }
}
