<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Models\Categoria;
use App\Models\Platform;
use Illuminate\Http\Request;


class JogoController extends Controller
{

    //Tabela de jogos
    public function indexWeb(Jogo $jogo)
    {
        return view('tables.games')->with('jogos', Jogo::all());
    }

    //Visualização de jogo único
    public function viewWeb(Jogo $jogo)
    {
        return view('tables.view')->with('jogo', $jogo);
    }

    //public function formularioGame(Request $request){
    //return view('tables.createGame')->with('categorias', Categoria::all())->with('platforms', Platform::all());
    //}

    //Formulario de criação jogo


    public function formularioGame(Request $request)
    {

        return view('tables.createGame')->with('categorias', Categoria::all())->with('platforms', Platform::all());
    }

    public function createWeb(Request $request, Jogo $jogo)
    {
        $jogo = Jogo::create($request->all());
        return view('tables.games')->with('jogos', Jogo::all());
    }


    public function create(Request $request, Jogo $jogo)
    {

        //   //INFERNO DE NEGOCIO
        //   //Criar as imagens e salvar num array;
        //  $images = [];

        //     $file = $request->file('filename');
        //     foreach ($file as $index => $item) {
        //         array_push($images, $file[$index]->store('jogos'));
        //     }

        //   //Implode
        //   $implode = implode("|", $images);
        //   $jogo = Jogo::create($request->all());

        //   //atualiza o endereço da imagem no banco
        //   $jogo->images = $implode;
        //   $jogo->save();

        //cria a imagem;




        // $images = $request->images->store('games');


       // $file = Jogo::file('images');
        $images = Jogo::file('images');
        $destinationPath = public_path() . '/games/';
        $filename = $images->getClientOriginalName();

        Jogo::file('images')->move($destinationPath, $filename);
        $jogo = Jogo::create($request->all());
        //atualiza o endereço da imagem no banco
        $jogo->images = $filename;
        $jogo->save();

        session()->flash('success', 'Jogo criado com sucesso!');
        return view('tables.games')->with('jogos', Jogo::all());
    }

    //API

    public function store(Request $request)
    {
        $jogo = Jogo::create($request->all());
        return response()->json($jogo);
    }

    public function show(Jogo $jogo)
    {
        return response()->json($jogo);
    }

    public function jogoCategoriaPlataforma(Jogo $jogo)
    {
        $categoria = Categoria::where('id', $jogo->categoria_id)->get();
        $plataforma = Platform::where('id', $jogo->platform_id)->get();
        $tudo = [
            'jogo' => $jogo,
            'categoria' => $categoria,
            'plataforma' => $plataforma,
        ];
        return response()->json($tudo);
    }

    public function update(Request $request, Jogo $jogo)
    {
        $jogo->update($request->all());
        return response()->json($jogo);
    }

    public function destroy(Jogo $jogo)
    {
        $jogo->delete();
        return response()->json($jogo);
    }

    public function index()
    {
        return response()->json(Jogo::all());
    }
}
