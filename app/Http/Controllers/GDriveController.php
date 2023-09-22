<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GDriveController extends Controller
{
    public function index()
    {
        return view('arquivosdrive');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
