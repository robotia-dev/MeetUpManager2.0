<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function createDepartament(Request $request)
    {   
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao_departamento' => 'nullable|string|max:255',
        ]);
     //total de reunioes
  
    
        $departamento = new Departamento;
        $departamento->departamento = $request->input('nome');
        $departamento->descricao_departamento = $request->input('descricao_departamento');
    
        $departamento->save();
    
        return redirect('/painel');
    }
}
