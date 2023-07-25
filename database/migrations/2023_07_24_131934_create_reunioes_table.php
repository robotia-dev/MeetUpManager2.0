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
        Schema::create('GerencReunioes', function (Blueprint $table) {
            $table->string('_token', 50)->nullable();
            $table->id();
            $table->dateTime('dta_acontecimento')->nullable();
            $table->decimal('duracao', 20, 6)->nullable();
            $table->string('nome')->nullable();
            $table->integer('organizador')->nullable();
            $table->string('tipo', 50)->nullable();
            $table->dateTime('dta_encerramento')->nullable();
            $table->timestamps();
            $table->integer('departamento')->nullable();
            $table->integer('sala')->nullable();

              // Chaves Estrangeiras
              $table->foreign('departamento')->references('id')->on('departamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
              $table->foreign('sala')->references('id')->on('salas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
              $table->foreign('organizador')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
              
              // Índices
              $table->index('departamento', 'FK_GerencReunioes_departamentos');
              $table->index('sala', 'FK_GerencReunioes_salas');
              $table->index('organizador', 'FK_GerencReunioes_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('GerencReunioes');
    }
};
