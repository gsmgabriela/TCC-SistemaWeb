<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entregador', function (Blueprint $table) {
            $table->increments('idEntregador');
            $table->integer('Funcionarioid')->unsigned();
            $table->foreign('Funcionarioid')->references('idFuncionario')->on('Funcionario')->onDelete('cascade');
            $table->integer('Equipe_entregaid')->unsigned();
            $table->foreign('Equipe_entregaid')->references('idEquipe_entrega')->on('Equipe_entrega')->onDelete('cascade');
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
        Schema::dropIfExists('Entregador');
    }
}
