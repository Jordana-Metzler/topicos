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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unidades_id');
            $table->unsignedBigInteger('professores_id');
            $table->unsignedBigInteger('turmas_id');
            $table->string('nome', 100);
            $table->string('telefone', 11);
            $table->string('data_nasc', 12);
            $table->foreign('unidades_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('professores_id')->references('id')->on('professores')->onDelete('cascade');
            $table->foreign('turmas_id')->references('id')->on('turmas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
