<?php

namespace App\Http\Controllers;

use App\Models\Ordem;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ComprasController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewOrdens()
    {

        $ordens = DB::table('tbl_ordem_compra')->get();
        $forncedores = DB::table('tbl_fornecedores')->orderBy('nome_fornecedor', 'ASC') ->get();
        $data = array(
            'ordens' => $ordens,
            'fornecedores' => $forncedores
        );
        return view('compras.ordens', ['dados' => $data]);
    }

    public function viewNFs()
    {

    }

    public function cadOrdem(Ordem $modelOrdem, Request $request)
    {
        $modelOrdem->nome_f;
        $modelOrdem->data_c;
        $modelOrdem->id_fk_nf;
    }


}
