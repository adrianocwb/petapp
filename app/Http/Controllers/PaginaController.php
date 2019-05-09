<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Auth;

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
        auth::logout();
        return redirect('/');
    }
}
