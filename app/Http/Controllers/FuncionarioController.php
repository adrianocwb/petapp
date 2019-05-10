<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{

    /**
     * Adiciona segurança
     * AgendamentoController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $funcionarios = Funcionario::all()->toArray();

        return view("admin.funcionarios.listar", array(
            "dados" => $funcionarios
        ));
    }

    public function novo()
    {
        return view("admin.funcionarios.novo");
    }

    public function editar($id)
    {
        $funcionario = Funcionario::find($id);

        return view("admin.funcionarios.editar", array(
            "dados" => $funcionario
        ));
    }

    public function deletar($id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();

        return redirect('/admin/funcionarios');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function cadastrar(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->save();

        return redirect('/admin/funcionarios');
    }

    /**
     * @param Request $request
     */
    public function salvar(Request $request)
    {
        $funcionario = Funcionario::find($request->id);
        $funcionario->nome = $request->nome;
        $funcionario->save();

        return redirect('/admin/funcionarios');
    }
}
