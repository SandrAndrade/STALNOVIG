<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('Refrescar');
    }

    public function index()
    {
        return view ('Inicio');
    }
}
