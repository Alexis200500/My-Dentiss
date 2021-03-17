<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetConsultaReseta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_consu_recetas',function(Blueprint $table){
            $table->increments('iddetallecr');
  
            $table->integer('idconsulta')->unsigned();
            $table->foreign('idconsulta')->references('idconsulta')->on('consultas');
  
            $table->integer('idmed')->unsigned();
            $table->foreign('idmed')->references('idmed')->on('medicamentos');
  
            $table->string('dosis',25);
            $table->string('periodo',20);
            $table->string('activo',2);
            $table->rememberToken();
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
        Schema::drop('det_consu_receta');
    }
}
