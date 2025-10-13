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
        $produtos = Produto::where('categoria', '=', 'bebidas')->get();
        return View('masculino', $produtos);
    }

    function feminino(){
        return View('feminino');
    }

    function time(){
        return View('time');
    }

    function kids(){
        return View('kids');
    }

    function sobre(){
        return View('sobre');
    }

    function contato(){
        return View('contato');
    }

    function acessorios(){
        return View('acessorios');
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


