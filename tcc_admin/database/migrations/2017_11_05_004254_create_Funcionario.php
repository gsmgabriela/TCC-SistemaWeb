<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Funcionario', function (Blueprint $table) {
            $table->increments('idFuncionario');
            $table->string('nome',85)->nullable();
            $table->string('cpf',11)->nullable();
            $table->string('telefone',12)->nullable();
            $table->string('email',105)->unique();
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
        Schema::dropIfExists('Funcionario');
    }
}
