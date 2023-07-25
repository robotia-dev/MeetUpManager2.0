<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('des_sala', 50)->nullable();
            $table->integer('capacidade')->nullable();
            $table->string('tipo', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas');
    }

    
    public static function readById($id)
    {
        return Reunioes::find($id);
    }

    public static function readAll()
    {
        return Reunioes::all();
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


};
