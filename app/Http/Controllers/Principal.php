<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return View('pagina-inicial');
    }

    function masculino(){
        return View('masculino');
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

    
}


