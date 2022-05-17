<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Historico;
use App\Models\Jogo;

class HistoricoController extends Controller
{
    public function index()
    {
        $historico = Historico::where('user_id', Auth()->user()->id)->get();
        if($historico == "[]"){
            $reposta = ['resposta' => "Sem histórico"];
            return response()->json($reposta);
        }

        foreach($historico as $valor){
            $jogosarray[] = Jogo::All()->find($valor->jogo_id);
        }

        return response()->json($jogosarray);
    }

    public function indexWeb(){

        $historico = Historico::all();

        if($historico == "[]"){
            $reposta = ['resposta' => "Sem histórico"];
            return response()->json($reposta);
        }

        foreach($historico as $valor){
            $jogosarray[] = Jogo::All()->find($valor->jogo_id);
        }

        return view('tables.historico')->with('historicos', Historico::all());
    }

    public function addH(Jogo $jogo)
    {
        Historico::create([
            'user_id' => Auth()->user()->id,
            'jogo_id' => $jogo->id
        ]);

        $cart = Cart::where('user_id', Auth()->user()->id)->get();
        if($cart == "[]"){
            $reposta = ['resposta' => "Carrinho vaziu"];
            return response()->json($reposta);
        }
        $item = Cart::where([
            ['jogo_id', $jogo->id],
            ['user_id', Auth()->user()->id]
        ])->first();

        $item->delete();
        $reposta = ['resposta' => "Compra feita"];
        return response()->json($reposta);
    }
}
