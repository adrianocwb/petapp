<?php

namespace App\Http\Controllers;

use App\Agendamento;
use App\Funcionario;
use App\Servicos;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{

    /**
     * Adiciona segurança
     * AgendamentoController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {

        $filtro = array();

        if ($request->get('status'))
        {
            $filtro['status'] = $request->get('status');
        }

        if ($request->get('servico'))
        {
            $filtro['servicos_id'] = $request->get('servico');
        }

        if ($request->get('profissional'))
        {
            $filtro['funcionario_id'] = $request->get('profissional');
        }



        $agendamento = Agendamento::query()
            ->where($filtro)
            ->orderBy("dataHora", 'desc')
            ->get();

        $servicos = Servicos::all();
        $prof = Funcionario::all();

        return view('admin.agendamento.listar', array(
            "dados" => $agendamento,
            "servicos" => $servicos,
            "profissionais" => $prof
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

    public function cancelar($id)
    {
        $agendamento = Agendamento::find($id);
        $agendamento->status = "CANCELADO";
        $agendamento->save();

        return redirect('/admin/agendamento');
    }

    public function confirmar($id)
    {
        $agendamento = Agendamento::find($id);
        $agendamento->status = "CONFIRMADO";
        $agendamento->save();

        return redirect('/admin/agendamento');
    }
}
