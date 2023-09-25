@extends('layout')

@section('content')
    <h2>Formulário de Triagem de Currículo</h2>
    <form>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <div class="mb-3">
            <label for="experiencia" class="form-label">Experiência Profissional</label>
            <textarea class="form-control" id="experiencia" rows="4" placeholder="Descreva sua experiência profissional"></textarea>
        </div>
        <div class="mb-3">
            <label for="motivacao" class="form-label">Motivação para a Vaga</label>
            <textarea class="form-control" id="motivacao" rows="4" placeholder="Explique por que você deseja esta vaga"></textarea>
        </div>
        <div class="mb-3">
            <label for="salario" class="form-label">Pretensão Salarial</label>
            <input type="text" class="form-control" id="salario" placeholder="Informe sua pretensão salarial">
        </div>
        <div class="mb-3">
            <label for="curriculo" class="form-label">Currículo (PDF)</label>
            <input type="file" class="form-control" id="curriculo">
        </div>
        <button type="submit" class="btn btn-primary">Enviar Currículo</button>
    </form>
@endsection
