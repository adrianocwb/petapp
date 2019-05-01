<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
    public function listar()
    {
        $funcionarios = Funcionario::all()->toArray();
        var_dump($funcionarios);

    }

    public function novo()
    {

    }

    public  function editar()
    {

    }

    public function deletar()
    {

    }
}
