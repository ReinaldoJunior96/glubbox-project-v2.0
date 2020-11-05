<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class EstoqueController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function estoqueFarmacia()
    {
        $produtos = DB::table('tbl_estoque')->get();
        $dados = [
            
        ];
        return view('estoqueFarmacia.estoque',['produtos' => $produtos]);
    }
    public function estoqueDiversos()
    {
        return view('estoqueFarmacia.estoque',['produtos' => Estoque::all()]);
    }
    public function editProduto($id)
    {
        return view('estoqueFarmacia.produto', ['produto' => Estoque::find($id)]);
    }
}
