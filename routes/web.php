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

/* Estoque rotas */
Route::prefix('estoque')->group(function(){
    Route::get('farmacia', [EstoqueController::class, 'estoqueFarmacia'])->name('view.estoque.farmacia')->middleware('auth');
    Route::get('diversos', [EstoqueController::class, 'estoqueDiversos'])->name('view.estoque.diversos')->middleware('auth');
    Route::get('produto/{produto}', [EstoqueController::class, 'editProduto'])->name('produto.view')->middleware('auth');
});





Route::post('/estoqueFarmacia/farmacia', [EstoqueController::class, 'novoProdutoFarmacia'])->name('produto.faramacia.cadastro');
Route::post('/estoqueFarmacia/estoqueDiversos', [EstoqueController::class, 'novoProdutoDiversos'])->name('produto.estoqueDiversos.cadastro');
Route::put('/estoqueFarmacia/produto/{produto}', [EstoqueController::class, 'alterarProduto'])->name('produto.edit');
Route::delete('/estoqueFarmacia/produto/{produto}', [EstoqueController::class, 'removerProduto'])->name('produto.delete');
/*
 *=====================================================*
*/









