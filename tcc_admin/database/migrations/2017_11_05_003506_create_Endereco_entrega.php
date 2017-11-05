<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Endereco_entrega', function (Blueprint $table) {
            $table->increments('idEndereco_entrega');
            $table->string('cep',8)->nullable();
            $table->string('numero',8)->nullable();
            $table->string('referencia',105)->nullable();
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
        Schema::dropIfExists('Endereco_entrega');
    }
}
