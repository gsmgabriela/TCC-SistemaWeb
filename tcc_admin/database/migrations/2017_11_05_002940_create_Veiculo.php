<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Veiculo', function (Blueprint $table) {
            $table->increments('idVeiculo');
            $table->string('modelo',45)->nullable();
            $table->string('cor',45)->nullable();
            $table->string('placa',6)->nullable();
            $table->integer('Tipo_veiculosid')->unsigned();
            $table->foreign('Tipo_veiculosid')->references('idTipo_veiculo')->on('Tipo_veiculo')->onDelete('cascade');
            $table->integer('Marca_veiculosid')->unsigned();
            $table->foreign('Marca_veiculosid')->references('idMarca_veiculo')->on('Marca_veiculo')->onDelete('cascade');

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
        Schema::dropIfExists('Veiculo');
    }
}
