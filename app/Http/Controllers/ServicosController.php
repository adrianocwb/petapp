<?php

namespace App\Http\Controllers;

use App\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function listar()
    {
        $servicos = Servicos::all();
        return view('admin.servicos.listar', array(
            "dados"=> $servicos
        ));
    }

    public function novo()
    {
        return view("admin.servicos.novo");
    }

    public function editar($id)
    {
        $servicos = Servicos::find($id);

        return view("admin.servicos.editar", array(
            "dados" => $servicos
        ));
    }

    public function deletar($id)
    {
        $servicos = Servico::find($id);
        $servicos->delete();

        return redirect('/admin/servicos');

    }

    public function cadastrar(Request $request)
    {
        $servicos = new Servicos();
        $servicos->nome = $request->nome;
        $servicos->valor = $request->valor;
        $servicos->save();

        return redirect('/admin/servicos');
    }

    /**
     * @param Request $request
     */
    public function salvar(Request $request)
    {
        $servicos = Funcionario::find($request->id);
        $servicos->nome = $request->nome;
        $servicos->save();

        return redirect('/admin/funcionarios');
    }
}
