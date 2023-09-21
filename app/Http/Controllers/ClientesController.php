<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        return view ('cadastro');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf_cnpj' => 'required'
        ]);

        $cliente = new Cliente;
        $cliente->nome = $request['nome'];
        $cliente->email = $request['email'];
        $cliente->cpf_cnpj = $request['cpf_cnpj'];

        $cliente->save();

        return redirect('clientes/cadastro')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
