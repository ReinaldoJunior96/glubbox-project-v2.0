<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EstoqueController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function estoqueFarmacia()
    {
        return view('estoque.estoque',['produtos' => Estoque::all()]);
    }

    public function editProduto($id)
    {
        return view('estoque.produto', ['produto' => Estoque::find($id)]);
    }
}
