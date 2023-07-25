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
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->integer('Confirmados')->nullable()->default(0);
            $table->integer('reuniao')->nullable()->default(0);
            $table->integer('comentario')->nullable()->default(0);
            $table->enum('status', ['EM ANDAMENTO', 'FINALIZADA', 'AGUARDANDO HORARIO'])->nullable();
            $table->timestamps();

            $table->foreign('reuniao')->references('id')->on('gerenc_reunioes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
