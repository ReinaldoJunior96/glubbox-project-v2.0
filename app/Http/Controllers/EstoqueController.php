<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class EstoqueController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function estoqueCadastro()
    {
        return view('estoque.cadProduto');
    }

    public function cadProduto(Estoque $prod, Request $request)
    {
        $prod->produto_e = $request->produto_e;
        $prod->quantidade_e = $request->quantidade_e;
        $prod->valor_un_e = $request->valor_un_e;
        $prod->estoque_minimo_e = $request->estoque_minimo_e;
        $prod->apresentacao = $request->apresentacao;
        $prod->concentracao = $request->concentracao;
        $prod->forma_farmaceutica = $request->forma_farmaceutica;
        $prod->principio_ativo = $request->principio_ativo;
        $prod->tipo = $request->tipo;
        if ($prod->save() == true) {
            return redirect()->route('cad.estoque')->with('status', 'Produto cadastrado com sucesso!!');
        } else {
            return redirect()->route('cad.estoque')->with('status', 'Erro ao cadastrar produto.');
        }
    }

    public function estoqueFarmacia()
    {
        $produtos = DB::table('tbl_estoque')
            ->where('produto_e', '!=', '')
            ->where('tipo', '=', '0')
            ->get();
        return view('estoque.prodFarmacia', ['produtos' => $produtos]);
    }

    public function estoqueAlmoxarifado()
    {
        $produtos = DB::table('tbl_estoque')
            ->where('produto_e', '!=', '')
            ->where('tipo', '=', 'material')
            ->get();
        return view('estoque.prodAlmoxarifado', ['produtos' => $produtos]);
    }

    public function altProduto($id)
    {
        return view('estoque.editProduto', ['produto' => Estoque::find($id)]);
    }

    public function alterarProduto($prod, Request $request)
    {
        $prodEdit = Estoque::find($prod);
        $prodEdit->produto_e = $request->produto_e;
        $prodEdit->quantidade_e = $request->quantidade_e;
        $prodEdit->valor_un_e = $request->valor_un_e;
        $prodEdit->estoque_minimo_e = $request->estoque_minimo_e;
        $prodEdit->apresentacao = $request->apresentacao;
        $prodEdit->concentracao = $request->concentracao;
        $prodEdit->forma_farmaceutica = $request->forma_farmaceutica;
        $prodEdit->principio_ativo = $request->principio_ativo;
        $prodEdit->tipo = $request->tipo;
        if ($prodEdit->save() == true) {
            return redirect()->route('produto.view', ['produto' => $prod])->with('status', 'Produto alterado com sucesso!!');
        } else {
            return redirect()->route('produto.view', ['produto' => $prod])->with('status', 'Erro ao alterar produto.');
        }
    }


    public function remProduto($produto)
    {
        $search = Estoque::find($produto);
        Estoque::destroy($produto);
        switch ($search->tipo) {
            case '0':
                return redirect()->route('estoque.farmacia')->with('status', 'Produto deletado com sucesso!!');
            case 'material':
                return redirect()->route('estoque.almoxarifado')->with('status', 'Produto deletado com sucesso!!');
        }
    }

}
