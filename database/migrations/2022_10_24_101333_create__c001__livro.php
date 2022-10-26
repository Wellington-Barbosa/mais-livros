<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC001Livro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('C001_Livro', function (Blueprint $table) {
            $table->id();
            $table->string('C001_Codigo')->unique();
            $table->string('C001_Titulo');
            $table->string('C001_Categoria');
            $table->string('C001_Prefacio');
            $table->string('C001_Status');
            $table->string('C001_Classificacao');
            $table->string('C001_Favorito');
            $table->string('C001_DataInclusao');
            $table->string('C001_UsuarioInclusao');
            $table->string('C001_DataAlteracao');
            $table->string('C001_UsuarioAlteracao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('C001_Livro');
    }
}
