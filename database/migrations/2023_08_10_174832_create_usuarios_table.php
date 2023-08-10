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
        Schema::create('usuarios', function (Blueprint $table) {

            $table->increments('id');          // Chave primária autoincrementável do tipo inteiro
            $table->string('nome', 255);            // Coluna do 'nome'
            $table->string('email', 255);           // Coluna do 'email'
            $table->string('senha', 255);           // Coluna da 'senha'
            $table->date('data_nascimento');        // Coluna da 'data de nascimento'
            $table->string('endereco', 255);        // Coluna do 'endereço'
            $table->string('telefone', 20);         // Coluna do 'telefone'
            $table->string('periodo_trabalho');     // Coluna do 'período de trabalho'

            // Coluna do 'tipo de usuário' para diferenciar entre "administrador" e "funcionario":
            $table->enum('tipo_usuario', ["administrador", "funcionario"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
