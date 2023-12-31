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
        Schema::create('consultas', function (Blueprint $table) {

            $table->bigIncrements('id');          // Chave primária autoincrementável do tipo inteiro
            $table->text('tratamento_realizado');   // Coluna do 'tratamento a ser realizado'
            $table->dateTime('data_inicio');        // Coluna da 'data de início'
            $table->dateTime('data_termino');       // Coluna da 'data de término'
            $table->decimal('custo', 10);           // Coluna do 'custo' com o valor até de 10 casas            


            // Coluna da chave estrangeira para a tabela de Usuarios
            $table->unsignedBigInteger('usuario_id');          // Chave primária autoincrementável do tipo inteiro
            $table->foreign('usuario_id')->references('id')->on('usuarios');

            // Coluna da chave estrangeira para a tabela de Animais
            $table->unsignedBigInteger('animal_id');           // Chave primária autoincrementável do tipo inteiro
            $table->foreign('animal_id')->references('id')->on('animais');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
