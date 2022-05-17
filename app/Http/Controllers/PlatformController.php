<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Models\Jogo;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    //
    public function indexWeb()
    {
        return view('tables.createGame')->with('platforms', Platform::all());
    }

    public function search($platforma)
    {
        $jogos = Jogo::where('platform_id', $platforma)->get();
        return response()->json($jogos);
    }

    public function index()
    {
        return response()->json(Platform::all());
    }

    public function show($Platform)
    {
        return response()->json($Platform);
    }
}
