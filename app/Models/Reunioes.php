<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunioes extends Model
{
    use HasFactory;

    protected $table = 'GerencReunioes';

    protected $fillable = [
        '_token',
        'dta_acontecimento',
        'duracao',
        'nome',
        'organizador',
        'tipo',
        'dta_criacao',
        'hora_inicio',
        'departamento',
        'sala',
        'created_at',
        'updated_at'
    ];

public static function readAll()
    {
        return Reunioes::all();
    }

    public static function readById($id)
    {
        return Reunioes::find($id);
    }

    public static function updateById($id, $data)
    {
        $reuniao = Reunioes::find($id);
        if ($reuniao) {
            $reuniao->update($data);
            return true;
        }
        return false;
    }

    public static function deleteById($id)
    {
        $reuniao = Reunioes::find($id);
        if ($reuniao) {
            $reuniao->delete();
            return true;
        }
        return false;
    }
}