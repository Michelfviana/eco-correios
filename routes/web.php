<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;

// Site Routes
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [LoginController::class, 'login'])->name('site.login');
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');

// App Routes
Route::prefix('/app')->group(function () {
    Route::get('/clientes', [ClientesController::class, 'index'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [ProdutosController::class, 'index'])->name('app.produtos');
});

// Fallback Route
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">clique aqui</a>';
});
