<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\JogoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('tables.user');

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'isAdmin'], function () {

    //Rotas usuário
    Route::get('/profile', [AuthenticatedSessionController::class, 'profile']);
    Route::get('/users', [AuthenticatedSessionController::class, 'index']);
    Route::get('/profileuser/{user}', [AuthenticatedSessionController::class, 'profileUser'])->name('profileUser');

    //Rotas jogos
    Route::get('/games', [JogoController::class, 'indexWeb']);
    Route::get('/view/{jogo}', [JogoController::class, 'viewWeb'])->name('viewGame');
    Route::get('/jogoweb/create', [JogoController::class, 'formularioGame'])->name('createGameWeb');
    Route::post('/jogoweb/store', [JogoController::class, 'createWeb'])->name('storeGame');

    //Rotas categorias
    Route::get('/category', [CategoriaController::class, 'indexWeb'])->name('home');
    Route::post('/categoriaweb/store', [CategoriaController::class, 'storeWeb'])->name('store');
    Route::get('/categoriaweb/create', [CategoriaController::class, 'formularioCategoria'])->name('createWeb');
    Route::get('/categoriaweb/edit{categoria}', [CategoriaController::class, 'editWeb'])->name('edit');
    Route::post('/categoriaweb/{categoria}', [CategoriaController::class, 'updateWeb'])->name('update');
    Route::GET('/categoriaweb/{categoria}', [CategoriaController::class, 'destroyWeb'])->name('destroy');

    //Historico
    Route::get('/historico', [HistoricoController::class, 'indexWeb'])->name('historico');
});
