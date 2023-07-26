@extends('layout.header')

@section('content')
    <h1>Lista de Reuniões</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalCriarReuniao">Criar Nova Reunião</button>
    <ul>
        @foreach ($reunioes as $reuniao)
            <li>
                <a href="{{ route('reunioes.show', $reuniao->id) }}">{{ $reuniao->nome }}</a>
                <form action="{{ route('reunioes.destroy', $reuniao->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>



    <div class="modal fade" id="modalCriarReuniao" tabindex="-1" role="dialog" aria-labelledby="modalCriarReuniaoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCriarReuniaoLabel">Criar Nova Reunião</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reunioes.store') }}" method="POST">
                        @csrf
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" required>
                        <!-- campos restantes para o formulário -->
                        <button type="submit" class="btn btn-primary">Criar Reunião</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
