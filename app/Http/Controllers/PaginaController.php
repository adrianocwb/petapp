<?php

namespace App\Http\Controllers;

use App\Agendamento;
use App\Funcionario;
use App\Servicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginaController extends Controller
{
    public function contato()
    {
        return view('contato');
    }

    public function admin()
    {
        return view('admin.base-admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function home()
    {
        $servico = Servicos::all();
        $prof = Funcionario::all();
        return view('welcome', array(
            "servicos" => $servico,
            "profissionais" => $prof
        ));

    }

    public function agendar(Request $request)
    {
        $regras = array
        (
            "servico" => "required",
            "profissional" => "required",
            "data" => "required",
            "cliente => required",
            "email" => "required|email"
        );

        $request->validate($regras);

        $agendamento = new Agendamento();
        $agendamento->dataHora= $request->data;
        $agendamento->servicos_id = $request->servico;
        $agendamento->funcionario_id = $request->profissional;
        $agendamento->cliente =$request->cliente;
        $agendamento->status="NOVO";

        $agendamento->save();
    }
}
