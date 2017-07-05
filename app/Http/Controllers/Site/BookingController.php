<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servico;
use App\Oficina;


class BookingController extends Controller
{
    public function index($id)
    {
      $servico = Servico::find($id);
      $oficina = Oficina::find($id);
      return view('site.booking', compact('servico', 'oficina'));
    }
}
