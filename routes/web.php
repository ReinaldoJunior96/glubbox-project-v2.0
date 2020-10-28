<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

/* Estoque rotas */
Route::get('/estoqueFarmacia/farmacia', [EstoqueController::class, 'estoqueFarmacia'])->name('estoqueFarmacia.farmacia.view');
Route::get('/estoqueFarmacia/estoqueDiversos', [EstoqueController::class, 'estoqueDiversos'])->name('estoqueFarmacia.estoqueDiversos.view');
Route::get('/estoqueFarmacia/produto/{produto}', [EstoqueController::class, 'editProduto'])->name('produto.view');


Route::post('/estoqueFarmacia/farmacia', [EstoqueController::class, 'novoProdutoFarmacia'])->name('produto.faramacia.cadastro');
Route::post('/estoqueFarmacia/estoqueDiversos', [EstoqueController::class, 'novoProdutoDiversos'])->name('produto.estoqueDiversos.cadastro');
Route::put('/estoqueFarmacia/produto/{produto}', [EstoqueController::class, 'alterarProduto'])->name('produto.edit');
Route::delete('/estoqueFarmacia/produto/{produto}', [EstoqueController::class, 'removerProduto'])->name('produto.delete');
/*
 *=====================================================*
*/









