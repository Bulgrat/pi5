<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoriaController;
use App\Http\Controllers\CartController;
use App\http\Controllers\JogoController;
use App\http\Controllers\UserController;
use App\http\Controllers\HistoricoController;
use App\Http\Controllers\PlatformController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Rotas de usuario
Route::get('/user', [AuthenticatedSessionController::class, 'listarTodosUsuarios']);
Route::get('/user/{user}', [AuthenticatedSessionController::class, 'show']);

//Rotas de Categoria
Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/categoria/{categoria}', [CategoriaController::class, 'show']);
Route::post('/categoria', [CategoriaController::class, 'store']);
Route::put('/categoria/{categoria}', [CategoriaController::class, 'update']);
Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy']);
Route::get('/categorias/{categoria}', [CategoriaController::class, 'search']);

//Jogo
Route::get('/jogo', [JogoController::class, 'index']);
Route::get('/jogo/{jogo}', [JogoController::class, 'show']);
Route::post('/jogo', [JogoController::class, 'store']);
Route::put('/jogo/{jogo}', [JogoController::class, 'update']);
Route::delete('/jogo/{jogo}', [JogoController::class, 'destroy']);
Route::get('/jogocompleto/{jogo}', [JogoController::class, 'jogoCategoriaPlataforma']);

//autenticado
Route::group(['middleware' => 'auth:sanctum'], function () {
    //carrinho
    Route::get('/cartapi', [CartController::class, 'showApi']);
    Route::get('/cartapi/addapi/{jogo}', [CartController::class, 'addApi']);
    Route::get('/cartapi/removeapi/{jogo}', [CartController::class, 'removeApi']);

    //Historico
    Route::get('/historico/addh/{jogo}', [CartController::class, 'addH']);
    Route::get('/historico', [HistoricoController::class, 'index']);
});

Route::post('/login', [UserController::class, 'logar']);
Route::post('/cadastro', [UserController::class, 'store']);

//Plataforma
Route::get('/platform', [PlatformController::class, 'index']);
Route::get('/platform/{id}', [PlatformController::class, 'show']);
Route::get('/platform/{id}', [PlatformController::class, 'search']);

