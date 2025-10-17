<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class Principal extends Controller
{
    function principal(){
        return View('pagina-inicial');
    }

    function masculino(){
        $produtos = Produto::where('categoria', '=', 'masculino')->get();
        return View('masculino', ['produtos' => $produtos]);
    }

    function feminino(){
        $produtos = Produto::where('categoria', '=', 'feminino')->get();
        return View('feminino', ['produtos' => $produtos]);
    }

    function time(){
        $produtos = Produto::where('categoria', '=', 'time')->get();
        return View('time', ['produtos' => $produtos]);
    }

    function kids(){
        $produtos = Produto::where('categoria', '=', 'kids')->get();
        return View('kids', ['produtos' => $produtos]);
    }

    function sobre(){
        return View('sobre');
    }

    function contato(){
        return View('contato');
    }

    function acessorios(){
        $produtos = Produto::where('categoria', '=', 'acessorios')->get();
        return View('acessorios', ['produtos' => $produtos]);
    }

    function login(){
        return View('login');
    }

    function gerenciarProduto(){
        return View('admin/gerenciar-produto');
    }

    function addProduto(Request $dados) {
        // dd($dados->all());
        Produto::create($dados->all());
        echo '<h1>Produto cadastrado com sucesso!<h1>';
        // return view('confirmacao-produto');
    }

    
}


