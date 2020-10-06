<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidaos', function (Blueprint $table) {
            $table->id();
         
            $table->string('TipoCertidao', 20);
            $table->string('NomeEnvolvidos', 20);
            $table->string('DataCertidao', 10);
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
        Schema::dropIfExists('certidaos');
    }
}
