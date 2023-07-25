@extends('layouts.app')

@section('content')
    <h1>Detalhes da Reunião</h1>
    <p>Nome: {{ $reuniao->nome }}</p>
    <p>Data de Acontecimento: {{ $reuniao->dta_acontecimento }}</p>
    <p>Duração: {{ $reuniao->duracao }}</p>
    <p>Participantes: {{ $reuniao->participantes }}</p>
    <!-- e outros campos que você desejar exibir -->
    <a href="{{ route('reunioes.index') }}" class="btn btn-primary">Voltar</a>
@endsection
