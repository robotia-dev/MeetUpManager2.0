<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    use HasFactory;

    protected $table = 'status';


public static function readAll()
{
    return Status::all();
}

public static function readById($id)
{
    return Status::find($id);
}

public static function updateById($id, $data)
{
    $status = Status::find($id);
    if ($status) {
        $status->update($data);
        return true;
    }
    return false;
}

public static function deleteById($id)
{
    $status = Status::find($id);
    if ($status) {
        $status->delete();
        return true;
    }
    return false;
}



}