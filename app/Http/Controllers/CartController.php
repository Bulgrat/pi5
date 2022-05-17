<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Categoria;
use App\Models\Jogo;
use App\Models\Historico;
use App\Models\Platform;

class CartController extends Controller
{
    public function showApi()
    {
        $cart = Cart::where('user_id', Auth()->user()->id)->get();
        if($cart == "[]"){
            $reposta = ['resposta' => "carrinho vazio"];
            return response()->json($reposta);
        }
        $jogoarray = Jogo::where('id', '=', $cart[0]->jogo_id)->get();
        $jogo = $jogoarray[0];
        $categoria = Categoria::where('id', $jogo->categoria_id)->get();
        $plataforma = Platform::where('id', $jogo->platform_id)->get();
        $tudo = [
            'jogo' => $jogo,
            'categoria' => $categoria,
            'plataforma' => $plataforma,
        ];
        return response()->json($tudo);
    }

    public function addApi(Jogo $jogo)
    {
        $cart = Cart::where('user_id', Auth()->user()->id)->get();

        if($cart != "[]"){
            $reposta = ['resposta' => "Finalize a compra para poder adicionar outro jogo"];
            return response()->json($reposta);
        }

        // se não exixtir cria o novo
        Cart::create([
            'user_id' => Auth()->user()->id,
            'jogo_id' => $jogo->id,
            'quantity' => 1
        ]);
        $reposta = ['resposta' => "Item adicionado"];
        return response()->json($reposta);
    }

    public function removeApi($jogo)
    {
        $cart = Cart::where('user_id', Auth()->user()->id)->get();
        if($cart == "[]"){
            $reposta = ['resposta' => "Carrinho vaziu"];
            return response()->json($reposta);
        }
        $item = Cart::where([
            ['jogo_id', $jogo],
            ['user_id', Auth()->user()->id]
        ])->first();

        $item->delete();
        $reposta = ['resposta' => "Item excluido excluido"];
        return response()->json($reposta);
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
        $reposta = ['resposta' => "Compra efetuada"];
        return response()->json($reposta);
    }
}
