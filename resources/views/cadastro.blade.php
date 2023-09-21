@extends('layout')

@section('content')
    <div class="row">
        <h1>Cadastro de Cliente</h1>
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <form method="POST" action="{{ route('cadastro.store') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="cpf_cnpj">CPF/CNPJ:</label>
                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
        </form>
    </div>
@endsection
