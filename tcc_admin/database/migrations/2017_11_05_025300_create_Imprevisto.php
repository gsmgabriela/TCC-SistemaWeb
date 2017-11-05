<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImprevisto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imprevisto', function (Blueprint $table) {
            $table->increments('idImprevisto');
            $table->string('descricao',105)->nullable();
            $table->integer('Entregaid')->unsigned();
            $table->foreign('Entregaid')->references('idEntrega')->on('Entrega')->onDelete('cascade');
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
        Schema::dropIfExists('Imprevisto');
    }
}
