<?php

namespace App\Http\Controllers;

use App\Agendamento;
use App\Funcionario;
use App\Servicos;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function listar()
    {
        $agendamento = Agendamento::all();

        return view('admin.agendamento.listar', array(
            "dados" => $agendamento
        ));
    }

    public function novo()
    {
        $servicos = Servicos::all();
        $prof = Funcionario::all();

        return view("admin.agendamento.novo", [
            "servicos" => $servicos,
            "profissionais" => $prof
        ]);
    }

    public function editar($id)
    {
        $agendamento = Agendamento::find($id);

        return view("admin.agendamento.editar", array(
            "dados" => $agendamento
        ));
    }

    public function deletar($id)
    {
        $agendamento = Agendamento::find($id);
        $agendamento->delete();

        return redirect('/admin/agendamento');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function cadastrar(Request $request)
    {
        $agendamento = new Agendamento();
        $agendamento->cliente = $request->cliente;
        $agendamento->valor = $request->valor;
        $agendamento->datahora = $request->datahora;
        $agendamento->funcionario_id = $request->funcionario;
        $agendamento->servicos_id = $request->servico;
        $agendamento->status = "NOVO";

        $agendamento->save();

        return redirect('/admin/agendamento');
    }

    /**
     * @param Request $request
     */
    public function salvar(Request $request)
    {
        $agendamento = Agendamento::find($request->id);
        $agendamento->nome = $request->nome;
        $agendamento->valor = $request->valor;
        $agendamento->save();

        return redirect('/admin/agendamento');
    }
}
