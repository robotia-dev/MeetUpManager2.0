<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamentos';
    protected $fillable = [
        'id',
        'departamento',
        'descricao_departamento',
        'created_at',
        'updated_at'
    ];
    public static function readAll()
    {
        return Departamento::all();
    }

    public static function readById($id)
    {
        return Departamentos::find($id);
    }

    public static function updateById($id, $data)
    {
        $departamento = Departamentos::find($id);
        if ($departamento) {
            $departamento->update($data);
            return true;
        }
        return false;
    }

    public static function deleteById($id)
    {
        $departamento = Departamentos::find($id);
        if ($departamento) {
            $departamento->delete();
            return true;
        }
        return false;
    }
}

