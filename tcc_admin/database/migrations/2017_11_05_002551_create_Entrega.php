<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entrega', function (Blueprint $table) {
            $table->increments('idEntrega');
            $table->integer('numPedido')->nullable();
            $table->integer('numCliente')->nullable();
            $table->date('dataPrevisao')->nullable();
            $table->date('dataEntrega')->nullable();
            $table->integer('Enderecoid')->unsigned();
            $table->foreign('Enderecoid')->references('idEndereco_entrega')->on('Endereco_entrega')->onDelete('cascade');
            $table->integer('Motoristaid')->unsigned();
            $table->foreign('Motoristaid')->references('idMotorista')->on('Motorista')->onDelete('cascade');
            $table->integer('Equipe_entregaid')->unsigned();
            $table->foreign('Equipe_entregaid')->references('idEquipe_entrega')->on('Equipe_entrega')->onDelete('cascade');
            $table->integer('Veiculoid')->unsigned();
            $table->foreign('Veiculoid')->references('idVeiculo')->on('Veiculo')->onDelete('cascade');
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
        Schema::dropIfExists('Entrega');
    }
}
