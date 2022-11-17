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
            $table->string('C001_Categoria')->nullable();
            $table->string('C001_Prefacio')->nullable();
            $table->string('C001_Status')->nullable();
            $table->string('C001_Classificacao')->nullable();
            $table->string('C001_Favorito')->nullable();
            $table->string('C001_DataInclusao')->nullable();
            $table->string('C001_UsuarioInclusao')->nullable();
            $table->string('C001_DataAlteracao')->nullable();
            $table->string('C001_UsuarioAlteracao')->nullable();

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
