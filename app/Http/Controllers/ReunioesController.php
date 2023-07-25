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
        //total de reunioes
        $reunioes = Reunioes::readAll();
        $totalReunioes = count($reunioes);

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
            'departamento' => $departamentos
        ]);
    }


   

       
        public function store(Request $request)
        {
          
            $reuniao = new Reunioes();

            $existsReunioes = Reunioes::where([
                ['dta_acontecimento', 'like', '%' . $request['dta_acontecimento'] . '%']
            ])->get();

            if($existsReunioes){
                return redirect('/painel')->with('failed', 'Reunião já existente.');
            }

            $reuniao->fill($request->all());
            $reuniao->save();
            return redirect('/painel'); 
        
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
