<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reunioes;
use App\Models\Departamento;
use App\Models\Sala;
use App\Models\User;



class ReunioesController extends Controller
{
    public function index()
    {
        $reunioes = Reunioes::readAll();
        return view('reunioes.index', ['reunioes' => $reunioes]);
    }

    public function show($id)
    {
        $reuniao = Reunioes::readById($id);
        if ($reuniao) {
            return view('reunioes.show', ['reuniao' => $reuniao]);
        } else {
            return redirect()->route('reunioes.index')->with('error', 'Reunião não encontrada.');
        }
    }

    public function create()
    {
        return view('reunioes.create');
    }

    public function getDepartments()
    {
        $setores = Departamento::readAll();
        $salas = Sala::readAll();
        $user = User::readAll();
        
        return view('admin', [
            'users' => $user,
            'departamentos' => $setores,
            'salas' => $salas
        ]);
    }

    public function getInfoPanel()
    {   
        $setores = Departamento::readAll();
        //total de reunioes
        $reunioes = Reunioes::readAll();
        $totalReunioes = count($reunioes);

        $users= User::readAll();

        //Salas disponiveis
        $salas = Sala::readAll();
        $totalSalas = count($salas);

        //porcentagem de ocupação
        $reunioesQtd = Reunioes::where([
            ['dta_acontecimento', 'like', '%' . date('Y-m-d') . '%']
        ])->get();
        $salasOcupadas = number_format( ( (count($reunioesQtd) / $totalSalas )*100), 0, '', '') . '%';

        //Departamentos
        $departamentos = Departamento::readAll();

        return view('painel', [
            'totalReunioes' => $totalReunioes,
            'totalEspacos' => $totalSalas,
            'espacos' => $salas,
            'ocupacaoSala' => $salasOcupadas,
            'reunioes' => $reunioes,
            'departamentos' => $departamentos,
            'usuarios' => $users
        ]);
    }


   

       
    public function store(Request $request)
{
    try {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'dta_acontecimento' => 'required|date',
            'nome' => 'required|string',
            'organizador' => 'nullable|integer',
            'tipo' => 'nullable|string|max:50',
            'dta_criacao' => 'nullable|date',
            'dta_encerramento' => 'nullable|date',
            'departamento' => 'nullable|integer',
            'sala' => 'nullable|integer',
            '_token' => 'nullable|string'
        ]);

        // Salvar a reunião no banco de dados
        $reuniao = new Reunioes();
        $reuniao->fill($validatedData);
        $reuniao->save();

        // Redirecionar para a página de painel
        return redirect('/painel');
    } catch (ValidationException $e) {
        // Redirect back to the previous page with the error messages
        return redirect()->back()->withErrors($e->errors());
    } catch (Throwable $e) {
        // Handle other exceptions
        return redirect()->back()->with('error', 'Erro ao criar a reunião. Por favor, tente novamente mais tarde.');
    }
}
    public function edit($id)
    {
        $reuniao = Reunioes::readById($id);
        if ($reuniao) {
            return view('reunioes.edit', ['reuniao' => $reuniao]);
        } else {
            return redirect()->route('reunioes.index')->with('error', 'Reunião não encontrada.');
        }
    }

    public function update(Request $request, $id)
    {
        // Validar os dados do formulário (opcional)

        // Atualizar a reunião no banco de dados
        $reuniao = Reunioes::readById($id);
        if ($reuniao) {
            $reuniao->update($request->all());
            return redirect()->route('reunioes.index')->with('success', 'Reunião atualizada com sucesso.');
        } else {
            return redirect()->route('reunioes.index')->with('error', 'Reunião não encontrada.');
        }
    }

    public function destroy($id)
    {
        $reuniao = Reunioes::readById($id);
        if ($reuniao) {
            $reuniao->delete();
            return redirect()->route('reunioes.index')->with('success', 'Reunião excluída com sucesso.');
        } else {
            return redirect()->route('reunioes.index')->with('error', 'Reunião não encontrada.');
        }
    }
}
