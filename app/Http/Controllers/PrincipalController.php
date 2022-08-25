<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function servicos()
    {
        return view('servicos');
    }

    public function time()
    {
        return view('time');
    }

    public function clientes()
    {
        return view('clientes');
    }

    public function sobre()
    {
        return view('quemsomos');
    }
}
