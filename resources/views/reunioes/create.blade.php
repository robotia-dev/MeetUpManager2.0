@extends('layout.header')

@section('content')
    <h1>Criar Nova Reunião</h1>
    <form action="{{ route('reunioes.create') }}" method="POST">
       
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="dta_acontecimento">Data do acontecimento:</label>
        <input type="datetime-local" name="dta_acontecimento" id="dta_acontecimento" required>

        <label for="duracao">Duração (em horas):</label>
        <input type="number" step="0.01" name="duracao" id="duracao" required>

        <label for="organizador">ID do organizador:</label>
        <input type="number" name="organizador" id="organizador" required>

        <label for="sala">ID da sala:</label>
        <input type="number" name="sala" id="sala" required>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" required>

        <label for="dta_criacao">Data de criação:</label>
        <input type="datetime-local" name="dta_criacao" id="dta_criacao" required>

        <label for="hora_inicio">Hora de início:</label>
        <input type="time" name="hora_inicio" id="hora_inicio" required>

        <label for="departamento">ID do departamento:</label>
        <input type="number" name="departamento" id="departamento" required>

        <button type="submit" class="btn btn-primary">Criar Reunião</button>
    </form>
    <a href="{{ route('reunioes.index') }}" class="btn btn-primary">Voltar</a>
@endsection
