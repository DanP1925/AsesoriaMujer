<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestimonioTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonio_tipo', function (Blueprint $table) {
            $table->integer('idTestimonio')->unsigned();
            $table->foreign('idTestimonio')->references('id')->on('testimonios');
            $table->integer('idTipo')->unsigned();
            $table->foreign('idTipo')->references('id')->on('tipo_violencias');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
