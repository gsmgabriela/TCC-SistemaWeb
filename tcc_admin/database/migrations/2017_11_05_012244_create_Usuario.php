<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('login',45)->nullable();
            $table->string('senha',10)->nullable();
            $table->integer('Tipo_usuariosid')->unsigned();
            $table->foreign('Tipo_usuariosid')->references('idTipo_usuario')->on('Tipo_usuario')->onDelete('cascade');
            $table->integer('Funcionarioid')->unsigned();
            $table->foreign('Funcionarioid')->references('idFuncionario')->on('Funcionario')->onDelete('cascade');
            $table->timestamps(); //created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
