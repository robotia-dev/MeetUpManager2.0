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
            $table->id();
            $table->dateTime('dta_acontecimento')->nullable();
            $table->decimal('duracao', 20, 6)->nullable();
            $table->string('nome')->nullable();
            $table->integer('organizador')->nullable();
            $table->string('tipo', 50)->nullable();
            $table->dateTime('dta_criacao')->nullable();
            $table->dateTime('hora_inicio')->nullable();
            $table->timestamps();
            $table->integer('departamento')->nullable();
            $table->integer('sala')->nullable();
            $table->string('_token', 50)->nullable();
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
