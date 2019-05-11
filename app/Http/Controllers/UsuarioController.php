<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function cadastrar(Request $request)
    {
        $regras = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $request->validate($regras);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/admin/usuarios');

    }
}
