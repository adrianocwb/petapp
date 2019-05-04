<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
    public function listar()
    {
        $funcionarios = Funcionario::all()->toArray();

        return view("admin.servicos.listar", array(
            "dados" => $funcionarios
        ));
    }

    public function novo()
    {
        return view("admin.servicos.novo");
    }

    public function editar($id)
    {
        $funcionario = Funcionario::find($id);

        return view("admin.servicos.editar", array(
            "dados" => $funcionario
        ));
    }

    public function deletar($id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();

        return redirect('/admin/servicos');

    }

    public function cadastrar(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->save();

        return redirect('/admin/servicos');
    }

    /**
     * @param Request $request
     */
    public function salvar(Request $request)
    {
        $funcionario = Funcionario::find($request->id);
        $funcionario->nome = $request->nome;
        $funcionario->save();

        return redirect('/admin/servicos');
    }
}
