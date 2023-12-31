<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReunioes;
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


   

    


public function store(CreateReunioes $request)
{
    $dta_acontecimento = $request->dta_acontecimento;
    $dta_encerramento = $request->dta_encerramento;
    $sala = $request->sala;
    $departamento = $request->departamento;

    $checking_disponibilidade = Reunioes::where('sala', $sala)
        ->where(function ($query) use ($dta_acontecimento, $dta_encerramento) {
            $query->whereBetween('dta_acontecimento', [$dta_acontecimento, $dta_encerramento])
                ->orWhereBetween('dta_encerramento', [$dta_acontecimento, $dta_encerramento]);
        })
        ->exists();

    if ($checking_disponibilidade) {
        return back()->with('error', 'Conflito de horário! Escolha outra sala disponível.');
    }


    $checking_departament_disponibilidade = Reunioes::where('departamento', $departamento)
        ->where(function ($query) use ($dta_acontecimento, $dta_encerramento) {
            $query->whereBetween('dta_acontecimento', [$dta_acontecimento, $dta_encerramento])
                ->orWhereBetween('dta_encerramento', [$dta_acontecimento, $dta_encerramento]);
        })
        ->exists();

    if ($checking_departament_disponibilidade) {
        return back()->with('error', 'Seu departamento já tem uma reunião marcada para esse horário. Por favor, verifique as reuniões cadastradas.');
    }

    $reuniao = Reunioes::create($request->all());

    return back()->with('success', 'Reunião criada com sucesso.');
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
