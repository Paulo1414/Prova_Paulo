<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
           
            $table->string('TipoContrato', 20);
            $table->string('NomeEnvolvidos', 30);
            $table->string('DataContrato', 20);
            $table->decimal('valor');
            $table->foreignId('id_tabeliaos');
            $table->foreign('id_tabeliaos')->references('id')->on('tabeliaos');  
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
