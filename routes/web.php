<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{EstoqueController, AuthController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* route raiz */
Route::get('/', fn() => view('dashboard'))->name('dashboard')->middleware('auth');

/* route de login */
Route::get('/login', fn() => view('login'))->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('realizar.login');
Route::get('/logout', [AuthController::class, 'logoutUser'])->name('realizar.logout');

/* dashboard retornando dados*/
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');


Route::prefix('estoque')->group(function () {
    /* Routas para views estoque */
    Route::get('cadastro', [EstoqueController::class, 'estoqueCadastro'])->name('cad.estoque')->middleware('auth');
    Route::get('farmacia', [EstoqueController::class, 'estoqueFarmacia'])->name('estoque.farmacia')->middleware('auth');
    Route::get('almoxarifado', [EstoqueController::class, 'estoqueAlmoxarifado'])->name('estoque.almoxarifado')->middleware('auth');
    Route::get('produto/{produto}', [EstoqueController::class, 'editProduto'])->name('estoque.produto')->middleware('auth');
    /* Routas para post put delete estoque */
    Route::post('cadastro', [EstoqueController::class, 'cadProduto'])->name('cad.produto')->middleware('auth');
    Route::put('/produto/{produto}', [EstoqueController::class, 'altProduto'])->name('alt.produto')->middleware('auth');
    Route::delete('/produto/{produto}', [EstoqueController::class, 'remProduto'])->name('rem.produto')->middleware('auth');
});



/* CRUD estoque*/

/*
 *=====================================================*
*/









