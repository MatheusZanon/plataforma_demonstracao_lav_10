<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    public function index()
    {
        return view('curriculo');
    }
}
