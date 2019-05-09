<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function listar()
    {
        $usuarios = User::all();
        return view('admin.usuario.listar',
        ['dados' => $usuarios]
        );
    }

    public function novo()
    {
        return view('admin.usuario.register');
    }
}
