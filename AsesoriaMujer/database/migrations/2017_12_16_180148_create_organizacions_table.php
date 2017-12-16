<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',250);
            $table->string('ubicacion',250);
            $table->string('telefono',20);
            $table->string('correo',250);
            $table->string('encargado',150);
            $table->text('descripcion');
            $table->time('comienzoAtencion');
            $table->time('finAtencion');
            $table->string('paginaWeb',250);
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
        Schema::dropIfExists('organizacions');
    }
}
