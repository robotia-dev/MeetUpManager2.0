<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';
    protected $fillable = ['_token','des_sala','capacidade','tipo'];
    public static function readAll()
    {
        return Sala::all();
    }

    public static function readById($id)
    {
        return Salas::find($id);
    }

    public static function updateById($id, $data)
    {
        $sala = Salas::find($id);
        if ($sala) {
            $sala->update($data);
            return true;
        }
        return false;
    }

    public static function deleteById($id)
    {
        $sala = Salas::find($id);
        if ($sala) {
            $sala->delete();
            return true;
        }
        return false;
    }
}