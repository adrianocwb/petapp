<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contato()
    {
        return view('contato');
    }

    public function admin()
    {
        return view('base-admin');
    }
}