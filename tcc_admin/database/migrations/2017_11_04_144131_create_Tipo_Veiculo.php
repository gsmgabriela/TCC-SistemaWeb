<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tipo_veiculo', function (Blueprint $table) {
            $table->increments('idTipo_veiculo');
            $table->string('tipo',50)->nullable();
            $table->string('descricao',10)->nullable();
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
        Schema::dropIfExists('Tipo_veiculo');
    }
}
