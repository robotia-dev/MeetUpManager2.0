<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reunioes;
use App\Models\Departamento;
use App\Models\Sala;
use App\Models\User;


class SalaController extends Controller
{
    public function store(Request $request)
    {
       
        $sala = new Sala();
        $sala->fill($request->all());
        $sala->save();
        return redirect('/admin'); 
    
    }


    public function destroy($id)
    {
        $sala = Sala::find($id);

        if (!$sala) {
            return back()->with('error', 'Sala não encontrada.');
        }

        $sala->delete();

        return redirect('/painel')->with('success', 'Sala excluída com sucesso.');
    }


}
