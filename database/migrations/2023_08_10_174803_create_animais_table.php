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
        Schema::create('animais', function (Blueprint $table) {
            
            $table->bigIncrements('id');          // Chave primária autoincrementável do tipo inteiro
            $table->string('nome', 255);            // Coluna do  'nome'
            $table->string('especie', 255);         // Coluna da  'especie'
            $table->string('raca', 255);            // Coluna da  'raça'
            $table->date('data_nascimento');        // Coluna da  'data de nascimento'
            $table->text('tratamentos_realizados'); // Coluna dos 'tratamentos realizados'

            // Coluna da chave estrangeira para a tabela de Proprietarios
            $table->unsignedBigInteger('proprietarios_id');          // Chave primária autoincrementável do tipo inteiro
            $table->foreign('proprietarios_id')->references('id')->on('proprietarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
