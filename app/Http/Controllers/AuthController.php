<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
    {
        $dadosQuantitativos = [
            'produtos' => DB::table('tbl_estoque')->count(),
            'saidas' => DB::table('tbl_saida')->count(),
            'fornecedores' => DB::table('tbl_fornecedores')->count(),
            'setores' => DB::table('tbl_setores')->count()
        ];
        return view('dashboard', ['dados' => $dadosQuantitativos]);
    }
    public function login(Request $request)
    {
        $credenciais = $request->only('email','password');
        if(Auth::attempt($credenciais)){
            return redirect('dashboard');
        }else{
            return redirect('login');
        }
    }
    public function logoutUser()
    {
        Auth::logout();
        return redirect('login');
    }
}
