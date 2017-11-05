<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Equipe_entrega', function (Blueprint $table) {
            $table->increments('idEquipe_entrega');
            $table->string('nome',50)->nullable();
            $table->string('descricao',105)->nullable();
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
        Schema::dropIfExists('Equipe_entrega');
    }
}
