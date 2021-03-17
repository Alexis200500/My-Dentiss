<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetConsultatrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_consultatrat',function(Blueprint $table){
            $table->increments('idct');
  
            $table->integer('idconsulta')->unsigned();
            $table->foreign('idconsulta')->references('idconsulta')->on('consultas');
  
            $table->integer('idtratamiento')->unsigned();
            $table->foreign('idtratamiento')->references('idtratamiento')->on('tratamientos');
  
            $table->string('horatermino',20);
            $table->string('susta_activa',20);
            $table->float('costo',15);
            $table->string('observaciones',50);
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
        Schema::drop('det_consultatrat');
    }
}
