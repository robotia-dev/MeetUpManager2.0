@extends('layouts.app')

@section('content')
    <h1>Editar Reunião</h1>
    <form action="{{ route('reunioes.update', $reuniao->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $reuniao->nome }}" required>
        <!-- campos restantes para o formulário -->
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
    <a href="{{ route('reunioes.index') }}" class="btn btn-primary">Voltar</a>
@endsection
