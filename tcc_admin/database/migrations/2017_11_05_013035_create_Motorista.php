<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Motorista', function (Blueprint $table) {
            $table->increments('idMotorista');
            $table->string('cnh',13)->nullable();
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
        Schema::dropIfExists('Motorista');
    }
}
