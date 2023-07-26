<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reunioes;
use App\Models\Departamento;
use App\Models\Sala;
use App\Models\User;


class DepartamentoController extends Controller
{
    public function createDepartament(Request $request)
    {   
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao_departamento' => 'nullable|string|max:255',
        ]);
     
    
        $departamento = new Departamento;
        $departamento->departamento = $request->input('nome');
        $departamento->descricao_departamento = $request->input('descricao_departamento');
    
        $departamento->save();
    
        return redirect('/painel')->with('success', 'Departamento criado com sucesso.');;
    }

    public function destroy($id)
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return back()->with('error', 'Departamento não encontrado.');
        }

        $departamento->delete();

        return redirect('/painel')->with('success', 'Departamento excluído com sucesso.');
    }



}
