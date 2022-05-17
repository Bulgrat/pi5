<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Jogo;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    //Função WEB
    public function indexWeb(Categoria $categoria)
    {
        return view('tables.category')->with('categorias', Categoria::all());
    }

    public function storeWeb(Request $request)
    {
        Categoria::create([

            'name' => $request->name

        ]);
        session()->flash('success', 'OK');
        return redirect(route('home'));
    }
    public function formularioCategoria()
    {
        return view('tables.createCategory');
    }

    public function editWeb(Categoria $categoria)
    {
        return view('tables.editCategory')->with('categoria', $categoria);
    }

    public function updateWeb(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        session()->Flash('success', 'Edit Ok!');
        return redirect(route('home'));
    }

    public function destroyWeb(Categoria $categoria)
    {
        $categoria->delete();
        session()->Flash('success', 'Deletado!');
        return redirect(route('home'));
    }

    //Função API
    public function index()
    {
        return response()->json(Categoria::all());
    }

    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return response()->json($categoria);
    }

    public function show(Categoria $categoria)
    {
        return response()->json($categoria);
    }

    public function search(Categoria $categoria)
    {
        $jogos = Jogo::where('categoria_id', $categoria->id)->get();

        return response()->json($jogos);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return response()->json($categoria);
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json($categoria);
    }
}
