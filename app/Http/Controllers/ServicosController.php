<?php

namespace App\Http\Controllers;

use App\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
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
        $servicos = Servicos::all();

        return view('admin.servicos.listar', array(
           "dados" => $servicos
        ));
    }

    public function novo()
    {
        return view("admin.servicos.novo");
    }

    public function editar($id)
    {
        $servico = Servicos::find($id);

        return view("admin.servicos.editar", array(
            "dados" => $servico
        ));
    }

    public function deletar($id)
    {
        $servico = Servicos::find($id);
        $servico->delete();

        return redirect('/admin/servicos');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function cadastrar(Request $request)
    {
        $regras = array(
            "nome" => "required|alpha_num|min:3",
            "valor" => "required|numeric",

        );

        $msg = array(
            "required" => "O campo é obrigatório",
            "numeric" => "O Campo deve ser do tipo numerico"
    );

        $request->validate($regras);

        $servico = new Servicos();
        $servico->nome = $request->nome;
        $servico->valor = $request->valor;
        $servico->save();

        return redirect('/admin/servicos');
    }

    /**
     * @param Request $request
     */
    public function salvar(Request $request)
    {
        $servico = Servicos::find($request->id);
        $servico->nome = $request->nome;
        $servico->valor = $request->valor;
        $servico->save();

        return redirect('/admin/servicos');
    }
}
